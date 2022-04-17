 ///////// Let user know that they have successfully scubscribed to newsletter /////////
 var subscribeBtn = document.getElementsByClassName("subscribe");
 var subscribeMessage = document.createElement('p');

 subscribeMessage.id = "subscribe-message";

 subscribeMessage.innerHTML = "Successfull subscribed!";

 subscribeBtn.addEventListener("click", 
   function() {
     document.getElementById("newsletter-signup").appendChild(subscribeMessage);
   }, false
 );