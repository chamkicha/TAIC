(function ( $ ) {
	let elActive = '';
    $.fn.selectCF = function( options ) {
 
        // option
        let settings = $.extend({
            color: "#FFF", // color
            backgroundColor: "#663052", // background
			change: function( ){ }, // event change
        }, options );
 
        return this.each(function(){
			
			let selectParent = $(this);
				list = [],
				html = '';
				
			//parameter CSS
			let width = $(selectParent).width();
			
			$(selectParent).hide();
			if( $(selectParent).children('option').length == 0 ){ return; }
			$(selectParent).children('option').each(function(){
				if( $(this).is(':selected') ){ s = 1; title = $(this).text(); }else{ s = 0; }
				list.push({ 
					value: $(this).attr('value'),
					text: $(this).text(),
					selected: s,
				})
			})
			
			// style
			let style = " background: "+settings.backgroundColor+"; color: "+settings.color+" ";
			
			html += "<ul class='selectCF'>";
			html += 	"<li>";
			html += 		"<span class='arrowCF ion-chevron-right' style='"+style+"'></span>";
			html += 		"<span class='titleCF' style='"+style+"; width:"+width+"px'>"+title+"</span>";
			html += 		"<span class='searchCF' style='"+style+"; width:"+width+"px'><input style='color:"+settings.color+"' /></span>";
			html += 		"<ul>";
			$.each(list, function(k, v){ s = (v.selected == 1)? "selected":"";
			html += 			"<li value="+v.value+" class='"+s+"'>"+v.text+"</li>";})		
			html += 		"</ul>";
			html += 	"</li>";
			html += "</ul>";
			$(selectParent).after(html);
			let customSelect = $(this).next('ul.selectCF'); // add Html
			let seachEl = $(this).next('ul.selectCF').children('li').children('.searchCF');
			let seachElOption = $(this).next('ul.selectCF').children('li').children('ul').children('li');
			let seachElInput = $(this).next('ul.selectCF').children('li').children('.searchCF').children('input');
			
			// handle active select
			$(customSelect).unbind('click').bind('click',function(e){
				e.stopPropagation();
				if($(this).hasClass('onCF')){ 
					elActive = ''; 
					$(this).removeClass('onCF');
					$(this).removeClass('searchActive'); $(seachElInput).val(''); 
					$(seachElOption).show();
				}else{
					if(elActive != ''){ 
						$(elActive).removeClass('onCF'); 
						$(elActive).removeClass('searchActive'); $(seachElInput).val('');
						$(seachElOption).show();
					}
					elActive = $(this);
					$(this).addClass('onCF');
					$(seachEl).children('input').focus();
				}
			})
			
			// handle choose option
			let optionSelect = $(customSelect).children('li').children('ul').children('li');
			$(optionSelect).bind('click', function(e){
				let value = $(this).attr('value');
				if( $(this).hasClass('selected') ){
					//
				}else{
					$(optionSelect).removeClass('selected');
					$(this).addClass('selected');
					$(customSelect).children('li').children('.titleCF').html($(this).html());
					$(selectParent).val(value);
					settings.change.call(selectParent); // call event change
				}
			})
				
			// handle search 
			$(seachEl).children('input').bind('keyup', function(e){
				let value = $(this).val();
				if( value ){
					$(customSelect).addClass('searchActive');
					$(seachElOption).each(function(){
						if( $(this).text().search(new RegExp(value, "i")) < 0 ) {
							// not item
							$(this).fadeOut();
						}else{
							// have item
							$(this).fadeIn();
						}
					})
				}else{
					$(customSelect).removeClass('searchActive');
					$(seachElOption).fadeIn();
				}
			})
			
		});
    };
	$(document).click(function(){
		if(elActive != ''){
			$(elActive).removeClass('onCF');
			$(elActive).removeClass('searchActive');
		}
	})
}( jQuery ));

$(function(){
  let event_change = $('#event-change');
  $( ".select" ).selectCF({
    change: function(){
      let value = $(this).val();
      let text = $(this).children('option:selected').html();
      console.log(value+' : '+text);
      event_change.html(value+' : '+text);
    }
  });
  $( ".test" ).selectCF({
    color: "#FFF",
    backgroundColor: "#663052",
  });
})