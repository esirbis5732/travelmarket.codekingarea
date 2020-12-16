
<?require_once($_SERVER['DOCUMENT_ROOT'] . "/bitrix/modules/main/include/prolog_before.php");?>
<?
$opts = array(
    'http'=>array(
        'method'=>"GET",
        'header'=>"Authorization: Token token=\"f7ca9ff62cac7ebe403b35b9e4065be4\"\r\n" .
            "Accept: application/vnd.leveltravel.v2\r\n"
    )
);
$context = stream_context_create($opts);
?>

<?
$url = "https://api.level.travel/references/countries";
$json = file_get_contents($url,false,$context);
$countries = json_decode($json);

$url = "https://api.level.travel/references/cities";
$json = file_get_contents($url,false,$context);
$cities = json_decode($json);

$url = "https://api.level.travel/references/destinations";
$json = file_get_contents($url,false,$context);
$destinations = json_decode($json);

//echo '<pre>';
//print_r($cities);
//echo '</pre>';
?>


<form method="post" name="form" action="<?=$APPLICATION->GetCurPageParam();?>" enctype="multipart/form-data">
    <div class="request_fields">
        <div class="travel_select" style="display: inline-block;">
            <div style="float: left; min-width: 150px;">
                Страна отправки
            </div>
            <div style="float: left; min-width: 300px;">
                <select name="from_country">
                    <option value="">(не установлено)</option>
                    <?foreach($countries as $country):?>
                        <option value="<?=$country->iso2?>"><?=$country->name_ru?></option>
                    <?endforeach;?>
                </select>
            </div>
        </div><br>
        <div class="travel_select" style="display: inline-block;">
            <div style="float: left; min-width: 150px;">
                Город отправки
            </div>
            <div style="float: left; min-width: 300px;">
                <select name="from_city">
                    <option value="">(не установлено)</option>
                    <?foreach($cities as $city):?>
                        <option value="<?=$city->name_en?>"><?=$city->name_ru?></option>
                    <?endforeach;?>
                </select>
            </div>
        </div><br>
        <div class="travel_select" style="display: inline-block;">
            <div style="float: left; min-width: 150px;">
                Страна прибытия
            </div>
            <div style="float: left; min-width: 300px;">
                <select name="to_country">
                    <option value="">(не установлено)</option>
                    <?foreach($countries as $country):?>
                        <option value="<?=$country->iso2?>"><?=$country->name_ru?></option>
                    <?endforeach;?>
                </select>
            </div>
        </div><br>
        <div class="travel_select" style="display: inline-block;">
            <div style="float: left; min-width: 150px;">
                Город прибытия
            </div>
            <div style="float: left; min-width: 300px;">
                <select name="to_city">
                    <option value="">(не установлено)</option>
                    <?foreach($cities as $city):?>
                        <option value="<?=$city->name_en?>"><?=$city->name_ru?></option>
                    <?endforeach;?>
                </select>
            </div>
        </div><br>
        <div class="travel_select" style="display: inline-block;">
            <div style="float: left; min-width: 150px;">
                Отель
            </div>
            <div style="float: left; min-width: 300px;">
                <select name="hotel">
                    <option value="">(не установлено)</option>
                </select>
            </div>
        </div><br>
        <div class="travel_select" style="display: inline-block;">
            <div style="float: left; min-width: 150px;">
                Ночей
            </div>
            <div style="float: left; min-width: 300px;">
                <input type="text" name="nights" value="" placeholder=""><br>
            </div>
        </div><br>
        <div class="travel_select" style="display: inline-block;">
            <div style="float: left; min-width: 150px;">
                Взрослых
            </div>
            <div style="float: left; min-width: 300px;">
                <input type="text" name="adults" value="" placeholder=""><br>
            </div>
        </div><br>
        <div class="travel_select" style="display: inline-block;">
            <div style="float: left; min-width: 150px;">
                Дата заезда
            </div>
            <div style="float: left; min-width: 300px;">
                <input type="text" name="start_date" value="" placeholder=""><br>
            </div>
        </div><br>
    </div>

    <div class="">
        <input class="btn_submit" type="submit" name="submit" value="Отправить">
    </div><br>
</form>

<?if(isset($_POST['submit'])):?>
    <?php
    //echo '<pre>';
    //print_r($_POST);
    //echo '</pre>';


    $url = "https://api.level.travel/search/enqueue?from_city=".$_POST['from_city']."&from_country=".$_POST['from_country']."&to_country=".$_POST['to_country']."&nights=".$_POST['nights']."&adults=".$_POST['adults']."&start_date=".$_POST['start_date']."";
    $json = file_get_contents($url,false,$context);
    $data = json_decode($json);

    $url = "https://api.level.travel/search/status?request_id=".$data->request_id;
    $json = file_get_contents($url,false,$context);
    $data = json_decode($json);

    $url = "https://api.level.travel/search/results?request_id=".$data->request_id;
    $json = file_get_contents($url,false,$context);
    $data = json_decode($json);

    $hotels = array();
    $response = $data->response;
    foreach($response as $hotel){
        echo '<pre>';
        print_r($hotel);
        echo '</pre>';

        $details = array();
        $details["name"] = $hotel->hotel->name;
        $details["desc"] = $hotel->hotel->desc;
        $details["city"] = $hotel->hotel->city;
        $strpansions = implode("|", $hotel->pansions);
        $details["pansions"] = $strpansions;
        $hotels[] = $details;
    }

    //echo '<pre>';
    //print_r($hotels);
    //echo '</pre>';

    //header("Location: /test_level_travel.php");

    ?>
<?endif;?>

<style>
    table.tbl_hotels {border: 1px solid grey;}
    .tbl_hotels th {border: 1px solid grey;}
    .tbl_hotels td {border: 1px solid grey;}
</style>
<table class="tbl_hotels">

    <tr>
        <th>№ п/п</th>
        <th>Наименование</th>
        <th>Описание</th>
        <th>Город</th>
        <th>Питание</th>
    </tr>
    <?
    $counter = 0;
    foreach($hotels as $hotel):?>
        <?$counter++?>
        <tr>
            <td><?=$counter?></td>
            <td><?=$hotel["name"]?></td>
            <td><?=$hotel["desc"]?></td>
            <td><?=$hotel["city"]?></td>
            <td><?=$hotel["pansions"]?></td>
        </tr>
    <?endforeach;?>
</table>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript" charset="UTF=8">!(function(e,t){var n=t.createElement("div"),r=t.scripts[t.scripts.length-1],i={"width":"auto","url_params":{},"target":"_self","localStorage":false,"geoLocation":true,"search_params":{"from":{"name_en":"Moscow","iso2":"RU"},"to":null,"nights":7,"adults":2,"kids":[],"start_date":null,"flex_dates":false,"flex_nights":false,"stars":{"from":1,"to":5},"currNightsQty":7}},a="LTApiInit",o=e.LTApi,s=[{"api_key":"9d611f32b98986fd5ce01cc19c1da932"},{"api_host":"api.level.travel","public_host":"level.travel"}];r.parentNode.insertBefore(n,r),n.id="__lt-widget-place",i.place=n,o||e[a]?function t(){var n=e.LTApi;n?(n.setup(s[0],s[1]),new n.Widgets.Search(i)):setTimeout(t,100)}():function(){var n=t.createElement("script");e[a]=e[a]||{},e[a].setup=s[0],e[a].envconfig=s[1],e[a].Search=i,n.setAttribute("sync",!0),n.setAttribute("charset","UTF-8"),n.setAttribute("type","text/javascript"),n.setAttribute("src","//api.level.travel/js/5.0/open_api.js"),t.head.appendChild(n)}()})(window, document)
</script>


<br>
<div class="search-form-submit"><button><span>Найти</span><em> туры</em></button></div>


<script>
    $(document).ready(function() {
        $("select").on("change", function() {
            console.log($("button"));

            var name = $(this).attr('name');

            if(name == "from_country"){

            }

            if(name == "from_city"){

            }
        })

        //alert(888);

        /*$("button").click(function (e) {
            e.preventDefault();
            alert(8);
        })*/

        $(".search-form-submit>button").click(function (e) {
            e.preventDefault();

            console.log($('[data-reactid=".0.0.0.0.3.0"]'));
            return false;
        })

        $('iframe').load(function(){
            alert(888);
            $(this).contents().find('div.myClass').append("Hallo, Welt!");
        });

    })
</script>




