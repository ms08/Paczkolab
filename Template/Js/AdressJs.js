jQuery(document).ready(function(){

 function loadUserView() {
   jQuery.ajax({
     type: 'GET',
     url: '../../router.php/user/',
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
          tdCity = document.createElement("td");
          tdZipCode = document.createElement("td");
          tdstreet = document.createElement("td");
          tdapartmentNumber = document.createElement("td");

          tdId.className="id";
          tdCity.className="name";
          tdZipCode.className="surname";
          tdstreet.className="street";
          tdapartmentNumber.className="apartmentNumber";

          tr.append(tdId);
          tr.append(tdCity);
          tr.append(tdZipCode);
          tr.append(tdstreet);
          tr.append(tdapartmentNumber);

          tdId.innerHTML = oUser.id;
          tdCity.innerHTML = oUser.city;
          tdZipCode.innerHTML = oUser.zipCode;
          tdstreet.innerHTML = oUser.street;
          tdapartmentNumber.innerHTML = oUser.apartmentNumber;

          tr = $('table').append(tr);
       });
   }
})
