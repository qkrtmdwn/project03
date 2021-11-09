$(function(){
	// 오전날씨
	 $.getJSON('https://api.openweathermap.org/data/2.5/forecast?id=1835848&units=metric&appid=1fb891490a89d555c367e037fc8a22cc',function(data){
		//alert(data.city.name);
		//alert(data.list[0].main.temp_min);
		var $aIcon = data.list[0].weather[0].icon;
		var $aTemp = data.list[0].main.temp;
		var $aMaxTemp = data.list[0].main.temp_max;
		var $aHumidity = data.list[0].main.humidity;
		var $aFeelsLike = data.list[0].main.feels_like;
		var $aSpeed = data.list[0].wind.speed;
		$('.aIcon').html('<img src="./wdata/'+$aIcon+'.jpg" />');
		$('.aTemp span').html($aTemp);
		$('.aMaxTemp span').html($aMaxTemp).css({'font-size':'18px'},{'color':'#222222'});
		$('.aHumidity span').html($aHumidity).css({'font-size':'18px'},{'color':'#222222'});
		$('.aFeelsLike span').html($aFeelsLike).css({'font-size':'18px'},{'color':'#222222'});
		$('.aSpeed span').html($aSpeed).css({'font-size':'18px'},{'color':'#222222'});
	});
	//오후날씨
	$.getJSON('https://api.openweathermap.org/data/2.5/forecast?id=1835848&units=metric&appid=1fb891490a89d555c367e037fc8a22cc',function(data){
		//alert(data.city.name);
		//alert(data.list[0].main.temp_min);
		var $pIcon = data.list[7].weather[0].icon;
		var $pTemp = data.list[7].main.temp;
		var $pMaxTemp = data.list[7].main.temp_max;
		var $pHumidity = data.list[7].main.humidity;
		var $pFeelsLike = data.list[7].main.feels_like;
		var $pSpeed = data.list[7].wind.speed;
		$('.pIcon').html('<img src="./wdata/'+$pIcon+'.jpg" />');
		$('.pTemp span').html($pTemp);
		$('.pMaxTemp span').html($pMaxTemp).css({'font-size':'18px'},{'color':'#222222'});
		$('.pHumidity span').html($pHumidity).css({'font-size':'18px'},{'color':'#222222'});
		$('.pFeelsLike span').html($pFeelsLike).css({'font-size':'18px'},{'color':'#222222'});
		$('.pSpeed span').html($pSpeed).css({'font-size':'18px'},{'color':'#222222'});
	});
	//내일날씨
	$.getJSON('https://api.openweathermap.org/data/2.5/forecast?id=1835848&units=metric&appid=1fb891490a89d555c367e037fc8a22cc',function(data){
		//alert(data.city.name);
		//alert(data.list[0].main.temp_min);
		var $tIcon = data.list[13].weather[0].icon;
		var $tTemp = data.list[13].main.temp;
		var $tMinTemp = data.list[13].main.temp_min;
		var $tMaxTemp = data.list[13].main.temp_max;
		var $tFeelsLike = data.list[13].main.feels_like;
		var $tSpeed = data.list[13].wind.speed;
		$('.tIcon').html('<img src="./wdata/'+$tIcon+'.jpg" />');
		$('.tTemp span').html($tTemp);
		$('.tMinTemp span').html($tMinTemp).css({'font-size':'18px'},{'color':'#222222'});
		$('.tMaxTemp span').html($tMaxTemp).css({'font-size':'18px'},{'color':'#222222'});
		$('.tFeelsLike span').html($tFeelsLike).css({'font-size':'18px'},{'color':'#222222'});
		$('.tSpeed span').html($tSpeed).css({'font-size':'18px'},{'color':'#222222'});
	});
	//현재날씨
	$.getJSON('https://api.openweathermap.org/data/2.5/weather?id=1835848&units=metric&appid=1fb891490a89d555c367e037fc8a22cc',function(data){
		//alert(data.city.name);
		//alert(data.list[0].main.temp_min);
		var $cIcon = data.weather[0].icon;
		var $cTemp = data.main.temp;
		var $cMaxTemp = data.main.temp_max;
		var $cHumidity = data.main.humidity;
		var $cFeelsLike = data.main.feels_like;
		var $cSpeed = data.wind.speed;
		$('.cIcon').html('<img src="./wdata/'+$cIcon+'.jpg" />');
		$('.cTemp span').html($cTemp);
		$('.cMaxTemp span').html($cMaxTemp).css({'font-size':'18px'},{'color':'#222222'});
		$('.cHumidity span').html($cHumidity).css({'font-size':'18px'},{'color':'#222222'});
		$('.cFeelsLike span').html($cFeelsLike).css({'font-size':'18px'},{'color':'#222222'});
		$('.cSpeed span').html($cSpeed).css({'font-size':'18px'},{'color':'#222222'});
	});
});