$(document).on("click", ".quick_contact_form", function (e) {
    e.preventDefault();

    var name = $("input[name=name]").val();
    var email = $("input[name=email]").val();
    var message = $("textarea[name=message]").val();

    if(name == null) {
        return alert();
    } else if (email == null) {
        return alert();
    } else if(message == null) {
        return alert();
    }
    
    alert('Mesajiniz iletildi ilginiz icin tesekkürler');

    $.ajax({
      url: "contact",
      type: "post",
      dataType: "json",
      data: {name, email, message},
      beforeSend: function () {
        $(".resultsCity").empty();
      },
      success: function (data, textStatus, jqXHR) {
        let new_csrf_code = data[0].csrf_fg;

        if (data.length > 0) {
          $("#resultsCity").removeClass("invisible");

          $.each(data, function (index, value) {
            $(
              ".resultsCity"
            ).append(`<a href="language/select_store/${value.store_id}" class="list-group-item list-group-item-action flex-column align-items-start" data-store-id="${value.store_id}">
            <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">${value.store_name}</h5>
                <small>${value.store_address}</small>
            </div>
            </a>`);
          });
        } else {
          $(".store-list").addClass("invisible");
        }

        $(".csrf").attr("data-csrf", data[0].csrf_fg);
      },

      error: function (jqXHR, textStatus, errorThrown) {
        window.location.reload();
        console.log("hata: " + jqXHR + " " + textStatus + " " + errorThrown);
      },
    }); //end ajax

    $(".all-store").hide(500);
    $(".left-sidebar-store").animate({ opacity: "1" }, 1000);
  });