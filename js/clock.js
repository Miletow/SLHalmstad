function flipTo(digit, n){
	var current = digit.attr('data-num');
	digit.attr('data-num', n);
	digit.find('.front').attr('data-content', current);
	digit.find('.back, .under').attr('data-content', n);
	digit.find('.flap').css('display', 'block');
	setTimeout(function(){
		digit.find('.base').text(n);
		digit.find('.flap').css('display', 'none');
	}, 350);
}

function jumpTo(digit, n){
	digit.attr('data-num', n);
	digit.find('.base').text(n);
}

function updateGroup(group, n, flip){
	var digit1 = $('.ten'+group);
	var digit2 = $('.'+group);
	n = String(n);
	if(n.length == 1) n = '0'+n;
	var num1 = n.substr(0, 1);
	var num2 = n.substr(1, 1);
	if(digit1.attr('data-num') != num1){
		if(flip) flipTo(digit1, num1);
		else jumpTo(digit1, num1);
	}
	if(digit2.attr('data-num') != num2){
		if(flip) flipTo(digit2, num2);
		else jumpTo(digit2, num2);
	}
}

function setTime(flip, date){
	var t = date;
	const _MS_PER_DAY = 1000 * 60 * 60 * 24;
	const _MS_PER_HOUR = 1000 * 60 * 60;
	const _MS_PER_MINUTE = 1000 * 60;
	const _MS_PER_SECOND = 1000;

	updateGroup('days', Math.floor(t/_MS_PER_DAY), flip);
	updateGroup('hour', Math.floor(t%_MS_PER_DAY/_MS_PER_HOUR), flip);
	updateGroup('min', Math.floor(t % _MS_PER_HOUR/_MS_PER_MINUTE), flip);
	updateGroup('sec', Math.floor(t % _MS_PER_MINUTE/ _MS_PER_SECOND), flip);
	t -=_MS_PER_SECOND;
	return t;
}
