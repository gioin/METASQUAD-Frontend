console.log("Gulp loaded");
let checkbox = document.getElementById("myburger");

  document.addEventListener("click", function(e){
    if(e.target.closest(".menu") || e.target.closest(".info")) return
    checkbox.checked = false;

  })
//setting default attribute to disabled of minus button
document.querySelector(".minus-btn").setAttribute("disabled", "disabled");


//taking value to increment decrement input value
let valueCount;

//taking price value in variable
let price = (document.getElementById("price"));
price.innerHTML = price.dataset["price"] + "$"
//price calculation function
function priceTotal() {

    let total = valueCount * price.dataset["price"];

    const couponAmount = document.getElementById("couponAmount").value;

    if (couponAmount > 0) {
        total -= couponAmount;
        if (total < 0) total = 0;
    }

    document.getElementById("totalprice").innerText = total + "$";
}

//plus button
document.querySelector(".plus-btn").addEventListener("click", function () {
  //getting value of input
  valueCount = document.getElementById("quantity").value;

  //input value increment by 1
  valueCount++;

  //setting increment input value
  document.getElementById("quantity").value = valueCount;

  if (valueCount > 1) {
    document.querySelector(".minus-btn").removeAttribute("disabled");
    document.querySelector(".minus-btn").classList.remove("disabled");
  }

  //calling price function
  priceTotal();
});

//plus button
document.querySelector(".minus-btn").addEventListener("click", function () {
  //getting value of input
  valueCount = document.getElementById("quantity").value;

  //input value increment by 1
  valueCount--;

  //setting increment input value
  document.getElementById("quantity").value = valueCount;

  if (valueCount === 0) {
    document.querySelector(".minus-btn").setAttribute("disabled", "disabled");
  }

  //calling price function
  priceTotal();
});

//Result search

function myFunction() {
    let input, filter, table, tr, td, i, txtValue;

    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }

    let resultsNotFound = true;
    document.querySelectorAll("table tr:not(.ignore-search)").forEach(tr => {
        let isHidden = tr.offsetParent === null;
        if(!isHidden) {
      resultsNotFound = false;
      }
    })

    let notFoundLabel = document.getElementById('not-found-row');
    if(resultsNotFound) {
      notFoundLabel.style.display = "";
    } else {
      notFoundLabel.style.display = "none";
    }

  }
