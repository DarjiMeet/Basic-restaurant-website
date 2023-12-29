// document.addEventListener('DOMContentLoaded',async ()=>{
//     let apiUrl = 'https://api.opentripmap.com/0.1/en/places/geoname?name=surat&apikey=5ae2e3f221c38a28845f05b64a43c4847bf95cdb3ed6c1a5e8d1fab8&country=IN';
//     let result = await fetch(apiUrl);
//     let data = await result.json();
//     console.log(data);
//     let lat = data.lat;
//     console.log(lat);
//     let lon = data.lon;
//     console.log(lon);
//     let limit = 10;
//     let xidUrl = `https://api.opentripmap.com/0.1/en/places/radius?radius=20000&lon=${lon}&lat=${lat}&src_geom=wikidata&src_attr=wikidata&rate=3&limit=${limit}&apikey=5ae2e3f221c38a28845f05b64a43c4847bf95cdb3ed6c1a5e8d1fab8`;
//     let xidResult = await fetch(xidUrl);
//     let xidData = await xidResult.json();
//     for(let i=0;i <= limit;i++){
//         let xid = xidData.features[i].properties.xid;
//         let mainUrl = `https://api.opentripmap.com/0.1/en/places/xid/${xid}?apikey=5ae2e3f221c38a28845f05b64a43c4847bf95cdb3ed6c1a5e8d1fab8`;
//         let mainResult = await fetch(mainUrl);
//         let mainData = await mainResult.json();
//         console.log(mainData);
       
//     }

//    });
const hamburger = document.querySelector(".hamburger");
const navLinks = document.querySelector(".nav-links");
const links = document.querySelectorAll(".nav-links li");

hamburger.addEventListener('click', ()=>{

    navLinks.classList.toggle("open");
    links.forEach(link => {
        link.classList.toggle("fade");
    });

    hamburger.classList.toggle("toggle");
});
const apiKey = "5ae2e3f221c38a28845f05b64a43c4847bf95cdb3ed6c1a5e8d1fab8";

    function apiGet(method, query) {
      return new Promise(function(resolve, reject) {
        var otmAPI =
          "https://api.opentripmap.com/0.1/en/places/" +
          method +
          "?apikey=" +
          apiKey;
        if (query !== undefined) {
          otmAPI += "&" + query + "&country=" + countrycode;
        }
        fetch(otmAPI)
          .then(response => response.json())
          .then(data => resolve(data))
          .catch(function(err) {
            console.log("Fetch Error :-S", err);
          });
      });
    }

    const pageLength = 5; // number of objects per page

    let lon; // place longitude
    let lat; // place latitude

    let offset = 0; // offset from first object in the list
    let count; // total objects count

    document.addEventListener("DOMContentLoaded", function (event) {
        let name = city;
        apiGet("geoname", "name=" + name).then(function(data) {
          let message = "Name not found";
          if (data.status == "OK") {
            message = data.name + ", " + countrycode;
            lon = data.lon;
            lat = data.lat;
            firstLoad();
          }
          document.getElementById("info").innerHTML = `${message}`;
        });
        event.preventDefault();
      });

      function firstLoad() {
        apiGet(
          "radius",
          `radius=${radius}&limit=${pageLength}&offset=${offset}&lon=${lon}&lat=${lat}&rate=3&format=count`
        ).then(function(data) {
          count = data.count;
          offset = 0;
          document.getElementById(
            "info"
          ).innerHTML += `<p>${count} Tourist Places with in a ${(radius/1000).toFixed(1)} km radius</p>`;
          loadList();
        });
      }

      
    function loadList() {
        apiGet(
          "radius",
          `radius=${radius}&limit=${pageLength}&offset=${offset}&lon=${lon}&lat=${lat}&rate=3&format=json`
        ).then(function(data) {
          let list = document.getElementById("list");
          list.innerHTML = "";
          data.forEach(item => list.appendChild(createListItem(item)));
          let nextBtn = document.getElementById("next_button");
          if (count < offset + pageLength) {
            nextBtn.style.visibility = "hidden";
          } else {
            nextBtn.style.visibility = "visible";
            nextBtn.innerText = `Next (${offset + pageLength} of ${count})`;
          }
        });
      }
    
      function createListItem(item) {
        let a = document.createElement("a");
        a.className = "list-group-item list-group-item-action";
        a.style = 'display:block;'
        a.setAttribute("data-id", item.xid);
        a.innerHTML = `<h5 class="list-group-item-heading">${item.name}</h5>
                  <p class="list-group-item-text">${item.kinds}</p>`;
  
        a.addEventListener("click", function() {
          document.querySelectorAll("#list a").forEach(function(item) {
            item.classList.remove("active");
          });         

            this.classList.add("active");

          let xid = this.getAttribute("data-id");
          apiGet("xid/" + xid).then(data => onShowPOI(data));
        });
        return a;
      }

      function onShowPOI(data) {
        let poi = document.getElementById("poi");
        poi.innerHTML = "";
        if (data.preview) {
          poi.innerHTML += `<img src="${data.preview.source}" alt="No Image">`;
        }
        poi.innerHTML += `<div class="overlay-text">${ data.wikipedia_extracts
          ? data.wikipedia_extracts.html
          : data.info
          ? data.info.descr
          : "No description"}</div>`;
  
        // poi.innerHTML += `<p><a target="_blank" href="${data.otm}">Show more at OpenTripMap</a></p>`;
      }

      document
      .getElementById("next_button")
      .addEventListener("click", function() {
        offset += pageLength;
        loadList();
      });
        