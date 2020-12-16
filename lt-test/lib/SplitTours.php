<?php

namespace hotTours;

//поиск туров тезтур
class SplitTours
{
	public $html="";
	public function comparefunction($v1,$v2)
	{
		if ($v1->name===$v2->name)
		{
			return 0;
		}
		return 1;
	}
	public function GetSplitTours(array $tours = array())
	{
		$step=0;
		$result=array();
		for ($index = 0; $index<count($tours)-1; $index++) 
		{	
			for ($mass1=0; $mass1<count($tours[$index]); $mass1++)
			{	
				$blank=array();
				$prices=array();
				$price1 = explode(' ',$tours[$index][$mass1]->name);
				for ($k=$index+1;$k<count($tours);$k++)
				{
					for ($mass2=0; $mass2<count($tours[$k]); $mass2++)
					{
						if ($tours[$k][$mass2]->name=="")continue;
						//cравнение цен
						$price2 = explode(' ',$tours[$k][$mass2]->name);
						if ((strtolower($price1[0])==strtolower($price2[0]) && strtolower($price1[1])==strtolower($price2[1])) || ($tours[$index][$mass1]->name==$tours[$k][$mass2]->name))
						{
							$prices[$tours[$k][$mass2]->brand] = array($tours[$k][$mass2]->price,$tours[$k][$mass2]->hotel_img,$tours[$k][$mass2]->hotel_url,$tours[$k][$mass2]->nightcount,$tours[$k][$mass2]->touristcount);
							$tours[$k][$mass2]->name="";
						}
					}
				}
				if (count($prices)>0)
				{
					$prices[$tours[$index][$mass1]->brand] = array($tours[$index][$mass1]->price,$tours[$index][$mass1]->hotel_img,$tours[$index][$mass1]->hotel_url,$tours[$index][$mass1]->nightcount,$tours[$index][$mass1]->touristcount);
					$blank["prices"] = $prices;
					$blank["items"] = $tours[$index][$mass1];
					array_push($result,$blank);
				}
			}
		}
		return $this->parseResult($result);
	}

	//получение массива с отелями
	//получение кода html
	protected function parseResult($result)
	{
		$html="";
		//получение минимальной цены
		foreach($result as $item)
		{
			$prices = $item['prices'];//список цен по всем поисковикам
			$hotel = $item['items'];//отель для отображения
			$html = $html. "<p> $hotel->name ";
			$carousel ="";//карусель с изображениями
			$min_block="";//блок бронировать с выгодной ценой
			$min_header="";//вывод в шапке с карточкой с минимальной ценой
			$price_list="";
			$img_list="";
			//собираем блоки с минимальными ценами и карусельку
			$min = PHP_INT_MAX;
			$brand="";
			foreach($prices as $key=>$value)
			{
				$html = $html."<span>$key  -   $value[0] р.</span>";
				/*if ($value[0]<$min)
				{
					$min_header =  "<div class='main_gate-price currency_font f-left'>
										от $value[0] рубл. <br/>
										<a href='$value[2]' class='price-min' target='_blank'>на $key</a>
									</div>";
					$min_block = "<div class='col-md-3 col-sm-3 col-xs-12'>
											  <div class='row img-card jumbotron card-main_gate'>
												<a class='card-main_gate__link' href='$value[2]' target='_blank'>
													<div class='main_gate-price_info'>
													  <div class='main_gate-price'>
														<span class='currency_font'>$value[0] р.</span>
													  </div>
													</div>
													<div class='main_gate-button_details'>
													  <div class='main_gate-button'>Бронировать</div>
													</div>
												</a>
											  </div>
								  </div>";
					$min = $value[0];
					$brand = $key;
}*/
			}
			/*foreach($prices as $key=>$value)
			{
				//слайдшоу
				$img_list .= "<div class='item'><div class='img-card' style='background: url($value[1]?width=250&height=240) center no-repeat'></div></div>";
				if ($key == $brand)continue;
				$price_list="<li class='card-gates_list-item'>
								<a href='$value[2]' target='_blank'>
									<span class='card-gates_list__name'>$key</span>
									<span class='card-gates_list__price'>$value[0] р.</span>
								</a>
							</li>";
			}
			$html = $html.  "<div class='col-md-12 col-sm-12 col-xs-12'>
                                <div class='hotel'>
									<div class='card'>
										<div class='row'>
											<div class='col-md-4 col-sm-4 col-xs-12'>
												<div class='owlcarousel owl-theme'>
													$img_list
												</div>
											</div>
											<div class='col-md-5 col-sm-5 col-xs-12'>
												<div class='hotel__info row'>
													<div class='hotel__info-top'>
													  <div class='hotel__top-row'>
														<div class='hotel-stars'>
														  <div class='hotel-stars-current hotel-stars-current_$hotel->stars'></div>
														</div>
														<div class='location-label'>$hotel->city $hotel->region</div>
													   </div>
													   <div class='faded-link'><a class='hotel-explore-link' target='_blank' href='$hotel->hotel_url' title='$hotel->name'>$hotel->name</a></div>
														$min_header
														<ul class='card-gates_list'>
															$price_list
														</ul>
													</div>
													<div class='hotel__info-bottom'>
													  <div class='hotel__pricing'>
														<div class='hotel__bottom-row'>
															<span class='hotel__order-params'>$hotel->touristcount чел./$hotel->nightcount ночей</span>
														</div>
													   </div>

													</div>
												</div>
											</div>
											$min_block
										</div>
									</div>
                                </div>
</div>";*/
}
		$html = $html."</p>";
		$this->html=$html;
		return $html;
	}
	//
}
