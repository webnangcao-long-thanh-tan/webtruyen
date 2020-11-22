

		//broad menu
		var type=document.getElementById('type');
		type.addEventListener('mouseover',function(){
			document.getElementById('broad-type').style.display="block";
		})
		type.addEventListener('mouseout',function(){
			document.getElementById('broad-type').style.display="none";
		})

		var hot=document.getElementById('hot');
		hot.addEventListener('mouseover',function(){
			document.getElementById('broad-hot').style.display="block";
		})
		hot.addEventListener('mouseout',function(){
			document.getElementById('broad-hot').style.display="none";
		})

		//broad account
		var account=document.getElementById('account');
		account.addEventListener('mouseover',function(){
			document.getElementById('broad-account').style.display="block";
		})
		account.addEventListener('mouseout',function(){
			document.getElementById('broad-account').style.display="none";
		})


		
		// icon
		var open=document.getElementById('icon__open');
		var close=document.getElementById('icon__close');
		open.addEventListener('click',function(){
			document.getElementById('nav__list').style.display='block';
			open.style.display='none';
			close.style.display='block';
		})

		close.addEventListener('click',function(){
			document.getElementById('nav__list').style.display='none';
			open.style.display='block';
			close.style.display='none';
		})
