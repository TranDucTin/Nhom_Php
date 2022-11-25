$(".addItem").submit(function (event) {
  event.preventDefault();
  console.log($(this).serializeArray());
  $.ajax({
    type: "POST",
    url: "./process_cart.php?action=add",
    data: $(this).serializeArray(),
    success: function (response) {
      response = JSON.parse(response);
      if (response.status == 0) {
        //Có lỗi
        alert(response.fail);
      } else {
        //Mua thành công
        alert(response.message);
        console.log(response);
        $(
          "<span class='cart-float-count'>" + response.status.length + "</span>"
        ).replaceAll(".cart-float-count");
        var cart = response.status;
        var tongtien = 0;
        cart.forEach((element) => {
          tongtien += element[3] * element[4];
        });
        $("<span class='tongtien'>" + tongtien + "VNĐ</span>").replaceAll(
          ".tongtien"
        );
        console.log(tongtien);
      }
    },
  }).always(function () {
    console.log("asdf");
  });
});
$(".removeItem").submit(function (event) {
  event.preventDefault();
  console.log($(this).serializeArray());
  $.ajax({
    type: "POST",
    url: "./process_cart.php?action=remove",
    data: $(this).serializeArray(),
    success: function (response) {
      response = JSON.parse(response);
      if (response.status == 0) {
        //Có lỗi
        alert(response.message);
      } else {
        //Mua thành công
        location.reload();
        alert(response.message);
      }
    },
  });
});
function abc() {
  session_start();
  alert("ok", $_SESSION["cart"]);
}
