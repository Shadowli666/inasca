const button = () =>{
	document.addEventListener('scroll', scrollPUpBtn, false)//scroll event
	pageUpBtn.addEventListener('click', upPage, false)//click event for the button
}
const scrollPUpBtn = () =>{
	if (window.scrollY < 100) {
		pageUpBtn.classList.add('d-none') //adding display box css
		pageUpBtn.classList.remove('d-box') //removing display none css
	}
	else {
			pageUpBtn.classList.remove('d-none') //removing display none css
			pageUpBtn.classList.add('d-box') //adding display box css
			pageUpBtn.style.backgroundColor = 'rgba('+0+','+0+','+0+','+window.scrollY*0.001*2+')'
			pageUpBtn.style.color = 'rgba('+255+','+255+','+255+','+window.scrollY*0.001*2+')'
			//Transparency for the button in scroll
		}
	}
	const upPage = () =>{
		window.scroll(0,-window.scrollY);//scroll to init of document
	}
	// Button created with DOM
	function createUp () {
		 var upPageElement =  document.createElement("div")//container
		 var upPageIcon =  document.createElement("i")//icon
		 upPageElement.classList.add('pageUp','d-none')//class for the container
		 upPageIcon.classList.add('fas','fa-angle-double-up','fa-fw')//class for the icon
		 upPageElement.appendChild(upPageIcon)//making icon child of container
		 document.body.appendChild(upPageElement)//adding container with icon to the document
		}
	createUp();//creating button
	const pageUpBtn = document.querySelector(".pageUp");//selecting button
	button();//init of the script