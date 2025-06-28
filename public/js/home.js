$(document).ready(function() {
    //---------start----------

    // modal
    (function modalFunc() {
        var modal = {
            image: $("#image"),
            background: $("#modalBackground"),
            selectImage: function() {
                var modalImage = modal.image;

                this.background.css("display", "block");
                this.image.css("display", "block");

            },
            clickOut: function() {
                this.background.css("display", "none");
                this.image.css("display", "none");
            }
        };

        $(".img").each(function(i) {
            $(this).on("click", function() {
                // changes the "this" reference to modal object
                // shows clicked image
                modal.selectImage.call(modal);

                // attaches clicked img src to the modal's src
                modal.image.attr("src", this.src);
            });
        });
        modal.background.on("click", function() {
            modal.clickOut.call(modal);
        });
    })();


    // toggle services tables
    $(".service-item button").on("click", function() {
        var thisTable = $(this).parent().find(".table-wrap");
        var text = $(this).text();

        thisTable.stop().slideToggle();
        $(".table-wrap").not(thisTable).slideUp();
    });


    // smooth scroll
    $('a[href*=\\#]').on('click', function(event){     
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
    });


    document.addEventListener("DOMContentLoaded", function () {
        // Ganti URL di bawah dengan link Google Maps lokasi RasaBeauty Bar Salon
        const mapUrl = "https://maps.app.goo.gl/GqU8oy959Hxsh2Qj6?g_st=iw";
      
        // Temukan elemen link dan set atribut href-nya
        const mapLink = document.getElementById("googleMapLink");
        if (mapLink) {
          mapLink.href = mapUrl;
        }
      });
      


    // contact validation
    var name = new Validation("#name", /^[a-z ,.'-]+$/i);
    var email = new Validation("#email", /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
    var subject = new Validation("#subject", /^\s*\S+.*/);
    var message = new Validation("#message", /^\s*\S+.*/);
    name.isValid();
    email.isValid();
    subject.isValid();
    message.isValid();

    //----------end------------
});

function initMap() {
    const rasaBeauty = { lat: -6.4025, lng: 106.7942 };
  
    const map = new google.maps.Map(document.getElementById("mapid"), {
      zoom: 15,
      center: rasaBeauty
    });
  
    new google.maps.Marker({
      position: rasaBeauty,
      map,
      title: "RasaBeauty Bar Salon"
    });
  }
  
  // Biarkan ini agar callback dari Google Maps API bisa memanggil fungsi
  window.initMap = initMap;
  