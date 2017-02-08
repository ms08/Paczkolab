jQuery(document).ready(function(){

 function loadUserView() {
   jQuery.ajax({
     type: 'GET',
     url: '../../router.php/parcel/',
     contentType:'application/json',
     dataType:'json',
     success: function (response) {
        addContentUser(response);
     },
     error:function (error) {
       alert("wystąpił błąd");
       console.log("wywala błąd")
       console.log(error);
     }
   })
 }
 loadUserView();


 function addContentUser(responseFromAjax)
   {
       $.each(responseFromAjax, function(key, oUser)
       {
          tr = document.createElement("tr");
          tdId = document.createElement("td");
          tduser = document.createElement("td");
          tdsize = document.createElement("td");


          tdId.className="id";
          tduser.className="user";
          tdsize.className="size";


          tr.append(tdId);
          tr.append(tduser);
          tr.append(tdsize);


          tdId.innerHTML = oUser.id;
          tduser.innerHTML = oUser.user;
          tdsize.innerHTML = oUser.size;


          tr = $('table').append(tr);
       });
   }
})
