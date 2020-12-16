<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Сравнения");
?><script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.12/vue.min.js" integrity="sha512-BKbSR+cfyxLdMAsE0naLReFSLg8/pjbgfxHh/k/kUC82Hy7r6HtR5hLhobaln2gcTvzkyyehrdREdjpsQwy2Jw==" crossorigin="anonymous"></script>
<div id="app-wrap">
	<h2>Сравнение</h2>
	<table id="comparison">
			<th>title</th><th>duration</th><th>price</th><th>rating</th><th>Для детей</th><th>Груповая</th><th>Индивидуальная</th><th>Обзорная</th><th>Познавательная</th><th>Необычные</th><th>Мастер-классы</th><th>Музей</th><th>Шоппинг</th><th>Гастрономическая</th><th>Фотосессия</th><th>delete</th>
			<tr v-for="(compel, index) in  comparison">
				<td>{{compel.result_title}}</td><td>{{compel.duration}}</td><td>{{compel.result_price}}</td><td>{{compel.result_rating}}</td><td v-if="compel.comp_child_friendly">Да</td><td v-else>Нет</td><td v-if="compel.comp_group">Да</td><td v-else>Нет</td><td v-if="compel.comp_private">Да</td><td v-else>Нет</td><td v-if="compel.comp_overview">Да</td><td v-else>Нет</td><td v-if="compel.comp_educational">Да</td><td v-else>Нет</td><td v-if="compel.comp_unusual">Да</td><td v-else>Нет</td><td v-if="compel.comp_master_class">Да</td><td v-else>Нет</td><td v-if="compel.comp_museum">Да</td><td v-else>Нет</td><td v-if="compel.comp_shoping">Да</td><td v-else>Нет</td><td v-if="compel.comp_gastro">Да</td><td v-else>Нет</td><td v-if="compel.comp_photoses">Да</td><td v-else>Нет</td><td><button @click="deletecomparison(index)">Delete</button></td>
			</tr>
		</table>
</div>
<script>
var app = new Vue({
	el: '#app-wrap',
	data:{
		comparison:[]
	},
	methods:{
		deletecomparison:function(ind) {
			let compdata;
			this.comparison.splice(ind, 1);
			compdata = JSON.stringify(this.comparison);
			localStorage.setItem('comparison', compdata);
		}
	},
	created:function() {
		let compdata = localStorage.getItem('comparison');
		if(compdata != null) {
			this.comparison = JSON.parse(compdata);
		}
	}
});
</script><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>