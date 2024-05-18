jQuery(document).ready(function($){
	//set animation timing
	var animationDelay = 2500,
		//loading bar effect
		barAnimationDelay = 3800,
		barWaiting = barAnimationDelay - 3000, //3000 is the duration of the transition on the loading bar - set in the scss/css file
		//letters effect
		lettersDelay = 50,
		//type effect
		typeLettersDelay = 150,
		selectionDuration = 500,
		typeAnimationDelay = selectionDuration + 800,
		//clip effect 
		revealDuration = 600,
		revealAnimationDelay = 1500;
	
	initHeadline();
	

	function initHeadline() {
		//insert <i> element for each letter of a changing word
		singleLetters($('.cd-headline.letters').find('b'));
		//initialise headline animation
		animateHeadline($('.cd-headline'));
	}

	function singleLetters($words) {
		$words.each(function(){
			var word = $(this),
				letters = word.text().split(''),
				selected = word.hasClass('is-visible');
			for (i in letters) {
				if(word.parents('.rotate-2').length > 0) letters[i] = '<em>' + letters[i] + '</em>';
				letters[i] = (selected) ? '<i class="in">' + letters[i] + '</i>': '<i>' + letters[i] + '</i>';
			}
		    var newLetters = letters.join('');
		    word.html(newLetters).css('opacity', 1);
		});
	}

	function animateHeadline($headlines) {
		var duration = animationDelay;
		$headlines.each(function(){
			var headline = $(this);
			
			if(headline.hasClass('loading-bar')) {
				duration = barAnimationDelay;
				setTimeout(function(){ headline.find('.cd-words-wrapper').addClass('is-loading') }, barWaiting);
			} else if (headline.hasClass('clip')){
				var spanWrapper = headline.find('.cd-words-wrapper'),
					newWidth = spanWrapper.width() + 10
				spanWrapper.css('width', newWidth);
			} else if (!headline.hasClass('type') ) {
				//assign to .cd-words-wrapper the width of its longest word
				var words = headline.find('.cd-words-wrapper b'),
					width = 0;
				words.each(function(){
					var wordWidth = $(this).width();
				    if (wordWidth > width) width = wordWidth;
				});
				headline.find('.cd-words-wrapper').css('width', width);
			};

			//trigger animation
			setTimeout(function(){ hideWord( headline.find('.is-visible').eq(0) ) }, duration);
		});
	}

	function hideWord($word) {
		var nextWord = takeNext($word);
		
		if($word.parents('.cd-headline').hasClass('type')) {
			var parentSpan = $word.parent('.cd-words-wrapper');
			parentSpan.addClass('selected').removeClass('waiting');	
			setTimeout(function(){ 
				parentSpan.removeClass('selected'); 
				$word.removeClass('is-visible').addClass('is-hidden').children('i').removeClass('in').addClass('out');
			}, selectionDuration);
			setTimeout(function(){ showWord(nextWord, typeLettersDelay) }, typeAnimationDelay);
		
		} else if($word.parents('.cd-headline').hasClass('letters')) {
			var bool = ($word.children('i').length >= nextWord.children('i').length) ? true : false;
			hideLetter($word.find('i').eq(0), $word, bool, lettersDelay);
			showLetter(nextWord.find('i').eq(0), nextWord, bool, lettersDelay);

		}  else if($word.parents('.cd-headline').hasClass('clip')) {
			$word.parents('.cd-words-wrapper').animate({ width : '2px' }, revealDuration, function(){
				switchWord($word, nextWord);
				showWord(nextWord);
			});

		} else if ($word.parents('.cd-headline').hasClass('loading-bar')){
			$word.parents('.cd-words-wrapper').removeClass('is-loading');
			switchWord($word, nextWord);
			setTimeout(function(){ hideWord(nextWord) }, barAnimationDelay);
			setTimeout(function(){ $word.parents('.cd-words-wrapper').addClass('is-loading') }, barWaiting);

		} else {
			switchWord($word, nextWord);
			setTimeout(function(){ hideWord(nextWord) }, animationDelay);
		}
	}

	function showWord($word, $duration) {
		if($word.parents('.cd-headline').hasClass('type')) {
			showLetter($word.find('i').eq(0), $word, false, $duration);
			$word.addClass('is-visible').removeClass('is-hidden');

		}  else if($word.parents('.cd-headline').hasClass('clip')) {
			$word.parents('.cd-words-wrapper').animate({ 'width' : $word.width() + 10 }, revealDuration, function(){ 
				setTimeout(function(){ hideWord($word) }, revealAnimationDelay); 
			});
		}
	}

	function hideLetter($letter, $word, $bool, $duration) {
		$letter.removeClass('in').addClass('out');
		
		if(!$letter.is(':last-child')) {
		 	setTimeout(function(){ hideLetter($letter.next(), $word, $bool, $duration); }, $duration);  
		} else if($bool) { 
		 	setTimeout(function(){ hideWord(takeNext($word)) }, animationDelay);
		}

		if($letter.is(':last-child') && $('html').hasClass('no-csstransitions')) {
			var nextWord = takeNext($word);
			switchWord($word, nextWord);
		} 
	}

	function showLetter($letter, $word, $bool, $duration) {
		$letter.addClass('in').removeClass('out');
		
		if(!$letter.is(':last-child')) { 
			setTimeout(function(){ showLetter($letter.next(), $word, $bool, $duration); }, $duration); 
		} else { 
			if($word.parents('.cd-headline').hasClass('type')) { setTimeout(function(){ $word.parents('.cd-words-wrapper').addClass('waiting'); }, 200);}
			if(!$bool) { setTimeout(function(){ hideWord($word) }, animationDelay) }
		}
	}

	function takeNext($word) {
		return (!$word.is(':last-child')) ? $word.next() : $word.parent().children().eq(0);
	}

	function takePrev($word) {
		return (!$word.is(':first-child')) ? $word.prev() : $word.parent().children().last();
	}

	function switchWord($oldWord, $newWord) {
		$oldWord.removeClass('is-visible').addClass('is-hidden');
		$newWord.removeClass('is-hidden').addClass('is-visible');
	}
});

$(function () {
    $('[data-bs-toggle="tooltip"]').tooltip();


	
    // typed
    var element = $('.imeiType');
	if (element.length > 0) { 
	    var typed = new Typed(".imeiType", { 
		    strings: ["*#06#"], 
		      
		    typeSpeed: 150, 
		    backSpeed: 150, 
		    loop: true, 
		});
	}
    

    // testmonial
    $('.testmonialList').slick({
	  dots: false,
	  infinite: false,
	  speed: 300,
	  slidesToShow: 2,
	  slidesToScroll: 2,
	  prevArrow: $('.prevTsetmonial'),
      nextArrow: $('.nextTsetmonial'),
	  responsive: [
	    {
	      breakpoint: 1024,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 1,
	        infinite: true,
	        dots: true
	      }
	    },
	    {
	      breakpoint: 600,
	      settings: {
	        slidesToShow: 2,
	        slidesToScroll: 2
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        slidesToShow: 1,
	        slidesToScroll: 1
	      }
	    }
	    // You can unslick at a given breakpoint now by adding:
	    // settings: "unslick"
	    // instead of a settings object
	  ]
	});
    

})
// banner form
$("#IngresarIMEI").keyup(function() {
	//$(this).val().length >14 && 
    if(isValidIMEI($("#IngresarIMEI").val())) {
	  $('.imeierror').hide();
	  $('.showErrorimei').hide();
	  $.ajax({
		url: 'imeicheck.php', 
		type: 'POST',
		dataType: 'json',
		data: {imeiNo: $("#IngresarIMEI").val()},
		success: function(response) {
			$('#brandName').html(capitalizeFirstLetter(response.brand_name)+' '+response.model);
			$('#brandBanner').attr('src','assets/img/brands/'+response.brand_name.toLowerCase()+'.png');
			$('#showPhoneModal').css('display','flex');
			$('.validIMEITag').show();
			$('#IngresarIMEI').addClass('padding60');
			$('#brandNameItem').val(capitalizeFirstLetter(response.brand_name));
			$('#brandNameItemModal').val(capitalizeFirstLetter(response.model));
		},
		error: function() {
			console.log('ERROR');
		}
	});	  

    }else{
		$('.imeierror').show();
		$('.showErrorimei').hide();
		$('#showPhoneModal').hide();
		$('.validIMEITag').hide();
		$('#IngresarIMEI').removeClass('padding60');
		$('#brandNameItem').val('');
		$('#brandNameItemModal').val('');
    }
 });

if($('#IngresarIMEI').length == 1){ 
	document.getElementById('IngresarIMEI').addEventListener('paste', event => {
	    event.preventDefault(); 
	    const contents = event.clipboardData.getData('text')
	    //alert(contents);
	    $("#IngresarIMEI").val(contents);
	    if(isValidIMEI(contents)) {
		  $('.imeierror').hide();
		  $('.showErrorimei').hide();
		  $.ajax({
			url: 'imeicheck.php', 
			type: 'POST',
			dataType: 'json',
			data: {imeiNo: contents},
			success: function(response) {
				$('#brandName').html(capitalizeFirstLetter(response.brand_name)+' '+response.model);
				$('#brandBanner').attr('src','assets/img/brands/'+response.brand_name.toLowerCase()+'.png');
				$('#showPhoneModal').css('display','flex');
				$('.validIMEITag').show();
				$('#IngresarIMEI').addClass('padding60');
				$('#brandNameItem').val(capitalizeFirstLetter(response.brand_name));
				$('#brandNameItemModal').val(capitalizeFirstLetter(response.model));
			},
			error: function() {
				console.log('ERROR');
			}
		});	  

	    }else{
			$('.imeierror').show();
			$('.showErrorimei').hide();
			$('#showPhoneModal').hide();
			$('.validIMEITag').hide();
			$('#IngresarIMEI').removeClass('padding60');
			$('#brandNameItem').val('');
			$('#brandNameItemModal').val('');
	    }
	});
}
// bought pop up 
setInterval(function(){
    $('.showLatestBuoght').fadeIn();
    // Hide the message box after 5 seconds (5000 milliseconds)
    setTimeout(function(){
        $('.showLatestBuoght').fadeOut();
    }, 4000);
}, 10000);



function sumDig(n)
{
	let a = 0;
	while (n > 0)
	{
		a = a + n % 10;
		n = parseInt(n / 10, 10);
	}
	return a;
}

function isValidIMEI(n)
{

	// Converting the number into
	// String for finding length
	let s = n.toString();
	let len = s.length;

	if (len != 15)
		return false;

	let sum = 0;
	for(let i = len; i >= 1; i--)
	{
	let d = (n % 10);

	// Doubling every alternate digit
	if (i % 2 == 0)
		d = 2 * d;

	// Finding sum of the digits
	sum += sumDig(d);
	n = parseInt(n / 10, 10);
	}

	return (sum % 10 == 0);
}

function capitalizeFirstLetter(str) 
{
	return str[0].toUpperCase() + str.slice(1).toLowerCase();
}


// 15 digits cannot be stored
// in 'int' data type
let n = 490154203237518;



$('.searchFormBanner').submit(function(event){
	event.preventDefault();
	if($('#NetworkName').val() == ''){
		$('.showErrorSelect').show();
		return false;
	}else{
		$('.showErrorSelect').hide();
	}
	if($('#IngresarIMEI').val() == ''){
		$('.showErrorimei').show();
		return false;
	}else{
		$('.showErrorimei').hide();
	}
	 
	var formData = {
        networkName: $('#NetworkName').val(),
        ingresarIMEI: $('#IngresarIMEI').val(),
        brandNameItem: $('#brandNameItem').val(),
        brandNameItemModal: $('#brandNameItemModal').val()
    };
    localStorage.setItem('formData', JSON.stringify(formData));
    $('#NetworkName').val('');
    $('#IngresarIMEI').val('');
    $('#brandNameItem').val('');
    $('#brandNameItemModal').val('');
    window.location.href = 'checkout.php';
})
// Retrieve the stored data from local storage
var formDataString = localStorage.getItem('formData');

// Check if there is stored form data
if (formDataString) {
    // Parse the stored JSON string back into an object
    var storedFormData = JSON.parse(formDataString);

    // Access the individual form fields and use them as needed
    var networkName = storedFormData.networkName;
    var ingresarIMEI = storedFormData.ingresarIMEI;
    var brandNameItem = storedFormData.brandNameItem;
    var brandNameItemModal = storedFormData.brandNameItemModal;

    // Do something with the retrieved form data, such as displaying it on the page
   // console.log(networkName, ingresarIMEI, brandNameItem);
    $('.codePhoneImei').text(ingresarIMEI);
    $('.namePhoneImei').text(brandNameItem + ' ' + brandNameItemModal);
    $('.networkNameText').text(networkName);
    
    if(networkName=='Claro Argentina'){
		$('#networkItemImage').attr('src','assets/img/Claro.png');
    }
    if(networkName=='Movistar Argentina'){
		$('#networkItemImage').attr('src','assets/img/Movistar.png');
    }
    if(networkName=='Personal Argentina'){
		$('#networkItemImage').attr('src','assets/img/Personal.png');
    }
    
}