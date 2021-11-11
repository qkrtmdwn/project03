$(function(){
	// sns로고 백그라운드 포지션
	$('.serviceImg>ul>li').addClass('rollover');
	$('.rollover').each(function(){
		var a = $(this);
		var img = a.find('img');
		var src_off = img.attr('src');
		var src_on = src_off.replace('_off','_on');


		$('<img/>').attr('src',src_on);

		a.hover(
			function(){
				img.attr('src',src_on);
			},
			function(){
				img.attr('src',src_off);
			}
		);
	});
	// 노티스존 이미지 슬라이드
/* 	var interval = 2500;
	$('#noticeZone').each(function(){
		var timer;
		var container = $(this);

		function switchImg(){
			var anchors = container.find('a');
			var first = anchors.eq(0);
			var second = anchors.eq(1);
			first.fadeOut().appendTo(container);
			second.fadeIn();
		};
		function startTimer(){
			timer=setInterval(switchImg,interval);
		};
		function stopTimer(){
			clearInterval(timer);
		};
		startTimer();
		container.find('a').hover(
			function(){
				stopTimer();
			},
			function(){
				startTimer();
			}
		);
	}); */
	// 팝업
	$('.popContent>button').click(function(){
		$('.popup').fadeOut();
	});
	// 텝메뉴
	$('#data').each(function(){
		var topDiv = $(this);
		var anchors = topDiv.find('.dataTop>ul>li>a');
		var panelDivs = topDiv.find('div.panel');
		var lastAnchor;
		var lastPanel;
		lastAnchor = anchors.filter('.on');
		lastPanel = $(lastAnchor.attr('href'));
		panelDivs.hide();
		lastPanel.show();
		anchors.click(function(e){
			e.preventDefault();
			var currentAnchor = $(this);
			var currentPanel = $(currentAnchor.attr('href'));
			if(lastAnchor.get(0) === currentAnchor.get(0)){
				return;
			};
			lastPanel.slideUp(function(){
				lastAnchor.removeClass('on');
				currentAnchor.addClass('on');
				currentPanel.stop(true, true).slideDown();
				lastAnchor = currentAnchor;
				lastPanel = currentPanel;
			});
		});
	});
	
	// 사진 애니메이션
		$('#subCont>div>.contImg').each(function(){
		var box = $(this);
		box.hover(
			function(){
				box.find('>a>img').stop().animate({'margin-top':'-200px'},500);
			},
			function(){
				box.find('>a>img').stop().animate({'margin-top':'0px'},500);
			}
		);
	});
	// 퀵메뉴
	bb = true;
	$('.quick').click(function(){
		if(bb){
			$(this).addClass('quickOpen').stop(true, true).animate({'margin-right':'-144px'},400);
			$('.quickmenu').stop(true, true).animate({'margin-right':'-144px'},400,function(){bb=false;});
		}else{
			$(this).removeClass('quickOpen').stop(true, true).animate({'margin-right':'0px'},400);
			$('.quickmenu').stop(true, true).animate({'margin-right':'0px'},400,function(){bb=true;});
		}
	});
	
	//리포트 텝메뉴
	var reportTab = $('.reportTitle>div');
	var reportContent = $('.reportMenu>div');
	reportContent.hide().eq(0).show();
	reportTab.click(function(e){
		e.preventDefault();
		var tg =$(this);
		var i = tg.index();
		reportTab.removeClass('active');
		tg.addClass('active');
		reportContent.css('display','none');
		reportContent.eq(i).css('display','block');
	});
	
	// 하단베너 이미지 애니메이션
	var interval = 3000;
	$('.link').each(function(){
		var timer;
		var container = $(this);

		function switchImg(){
			var anchors = container.find('a');
			var first = anchors.eq(0);
			var second = anchors.eq(1);
			first.fadeOut().appendTo(container);
			second.fadeIn();
		};
		function startTimer(){
			timer=setInterval(switchImg,interval);
		};
		function stopTimer(){
			clearInterval(timer);
		};
		startTimer();
		container.find('a').hover(
			function(){
				stopTimer();
			},
			function(){
				startTimer();
			}
		);
	});
	//slide_banner
	var box1 = $('#contentBox1');
	var box2 = $('#contentBox2');
	var box3 = $('#contentBox3');
	var box4 = $('#contentBox4');
	
	box1.find('.innerContent').css('display','none');
	box2.find('.innerContent').css('display','none');
	box3.find('.innerContent').css('display','none');
	box4.find('.innerContent').css('display','none');
	
	box1.hover(
		function(){
			box1.stop().animate({'width':'1420px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'0', 'left':'1420px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'0', 'left':'1420px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'0', 'left':'1420px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box1.find('>.boxinner>h3').stop().animate({'height':'90px','font-size':'26px', 'line-height':'90px'},{duration: 300, queue:false, easeing: 'easeOutCubic'});
			box1.find('.innerContent').css('display','block');
		},
		function(){
			box1.stop().animate({'width':'355px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'355px', 'left':'355px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'355px', 'left':'710px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'355px', 'left':'1065px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box1.find('>.boxinner>h3').stop().animate({'height':'70px','font-size':'20px', 'line-height':'70px'},{duration: 600, queue:false, easeing: 'easeOutCubic'},function(){box1.find('.innerContent').css('display','none');});
		}
	);
	box2.hover(
		function(){
			box1.stop().animate({'width':'0', 'left':'0px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'1420px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'0', 'left':'1420px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'0', 'left':'1420px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.find('>.boxinner>h3').stop().animate({'height':'90px','font-size':'26px', 'line-height':'90px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box2.find('.innerContent').css('display','block');
		},
		function(){
			box1.stop().animate({'width':'355px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'355px', 'left':'355px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'355px', 'left':'710px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'355px', 'left':'1065px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.find('>.boxinner>h3').stop().animate({'height':'70px','font-size':'20px', 'line-height':'70px'},{duration: 600, queue:false, easeing: 'easeOutCubic'},function(){box2.find('.innerContent').css('display','none')});
		}
	);
	box3.hover(
		function(){
			box1.stop().animate({'width':'0', 'left':'0px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'0', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'1420px', 'left':'0px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'0', 'left':'1420px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.find('>.boxinner>h3').stop().animate({'height':'90px','font-size':'26px', 'line-height':'90px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box3.find('.innerContent').css('display','block');
		},
		function(){
			box1.stop().animate({'width':'355px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'355px', 'left':'355px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'355px', 'left':'710px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'355px', 'left':'1065px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.find('>.boxinner>h3').stop().animate({'height':'70px','font-size':'20px', 'line-height':'70px'},{duration: 600, queue:false, easeing: 'easeOutCubic'},function(){box3.find('.innerContent').css('display','none')});
		}
	);
	box4.hover(
		function(){
			box1.stop().animate({'width':'0', 'left':'0px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'0', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'0', 'left':'0px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'1420px', 'left':'0px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.find('>.boxinner>h3').stop().animate({'height':'70px','font-size':'22px', 'line-height':'70px'},{duration: 600, queue:false, easeing: 'easeOutCubic'});
			box4.find('.innerContent').css('display','block');
			
		},
		function(){
			box1.stop().animate({'width':'355px', 'left':'0'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box2.stop().animate({'width':'355px', 'left':'355px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box3.stop().animate({'width':'355px', 'left':'710px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.stop().animate({'width':'355px', 'left':'1065px'},{duration:600,queue:false,easeing:'easeOutCubic'});
			box4.find('>.boxinner>h3').stop().animate({'height':'70px','font-size':'20px', 'line-height':'70px'},{duration: 600, queue:false, easeing: 'easeOutCubic'},function(){box4.find('.innerContent').css('display','none');});
		}
	);
	
	
	// 메인이미지 슬라이드
	var panelWidth = $('#contwrap > .sliderImg').width();
	var controlBtn1 =$('#mainCont .controlBtn');
	controlBtn1.each(function(index){
		$(this).attr('data-index',index);
	}).click(function(){
		var index = $(this).attr('data-index');
		//console.log(index);
		moveSlider(index);
		return false;
	});
	function moveSlider(index){
		var willMoveLeft = -(index%4*panelWidth);
		$('#contwrap').animate({left:willMoveLeft},{duration: 600, queue:false, easeing: 'easeOutCubic'});
		$('#mainCont .controlBtn[data-index='+index+']').addClass('active');
		$('#mainCont .controlBtn[data-index!='+index+']').removeClass('active');
		randomNumber = index;
	};
	var randomNumber = Math.round(Math.random()*(controlBtn1.size()-1));
	moveSlider(0);
	var setIntervalId;
	function timer(){
		setIntervalId = setInterval(function(){
			randomNumber++;
			if(randomNumber==controlBtn1.size()){randomNumber=0;}
			moveSlider(randomNumber);
		},3000);
	};
	timer();
	$('#mainCont').hover(
		function(){
			clearInterval(setIntervalId);
		},
		function(){
			timer();
		}
	);
	
	$('#mainCont .left').click(function(){
		randomNumber--;
		if(randomNumber<0){randomNumber=controlBtn1.size()-1;};
		controlBtn1.eq(randomNumber).trigger('click');
	});
	$('#mainCont .right').click(function(){
		randomNumber++;
		if(randomNumber>controlBtn1.size()-1){randomNumber=0;};
		controlBtn1.eq(randomNumber).trigger('click');
	});
	
	
	
	//하단 이미지 버튼 슬라이드
	var banner = $('#informal .cWrap>ul>li');
	var leftBtn = $('#informal .leftBtn');
	var rightBtn = $('#informal .rightBtn');
	var current = 0;
	var set;
	function slideMove(){
		set = setInterval(function(){
			var prev = banner.eq(current);
			move(prev,'0%','-100%');
			current++;
			if(current==banner.size()){current=0;};
			var next = banner.eq(current);
			move(next,'100%','0%');
		},3000);
		function move(tg,start,end){
			tg.css('left',start).stop().animate({left:end},700);
		};
	};
	banner.hover(
		function(){
			clearInterval(set);
		},
		function(){
			slideMove()
		}
	);
	slideMove();
	
	//상단 이벤트창
	$('.event>.button').click(function(){
		$('.eventWrap').animate({'margin-top':'-60px'},{duration:500,queue:false,easeing:'easeOutCubic'});
	});
	
	
});















































