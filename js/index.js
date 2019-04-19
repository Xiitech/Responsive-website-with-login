    function changeImage () {

		 document.getElementById("back2Image").src = "images/1.gif";
	}
	
	var modal = document.querySelector(".modal");
    var trigger1 = document.querySelector(".trigger1");
    var trigger2 = document.querySelector(".trigger2");	
    var closeButton = document.querySelector(".close-button");

    function toggleModal() {
        modal.classList.toggle("show-modal");
		disableScrolling();
    }

    function scrollAgain() {
        enableScrolling();
    }
	
    function windowOnClick(event) {
        if (event.target === modal) {
            toggleModal();
        }
    }

    trigger1.addEventListener("click", toggleModal);
    trigger2.addEventListener("click", toggleModal);	
    closeButton.addEventListener("click", toggleModal);
	closeButton.addEventListener("click", scrollAgain);
    window.addEventListener("click", windowOnClick);
	
	function disableScrolling(){
		var x=window.scrollX;
		var y=window.scrollY;
		window.onscroll=function(){window.scrollTo(x, y);};
    }
	function enableScrolling(){
		window.onscroll=function(){};
    }