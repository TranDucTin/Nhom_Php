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
        $.get("product_cart_content.php", function (contentHTML) {
          $("#ajax-cart").html(contentHTML);
        });
      }
    },
  });
});
function abc(quantity) {
  // alert("ok", quantity);
  if (quantity != "") {
    $.ajax({
      type: "POST",
      url: "./process_cart.php?action=update",
      data: $(".updateItem").serializeArray(),
      success: function (response) {
        response = JSON.parse(response);
        console.log(response);
        if (response.status == 0) {
          //Có lỗi
          alert(response.fail);
          $.get("product_cart_content.php", function (contentHTML) {
            $("#ajax-cart").html(contentHTML);
          });
        } else {
          //Mua thành công
          // alert(response.status);
          $.get("product_cart_content.php", function (contentHTML) {
            $("#ajax-cart").html(contentHTML);
          });
        }
      },
    });
  }
}
