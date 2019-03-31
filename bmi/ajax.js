function ajax() {
  let debug = true;
  let controlScript = "BMI.php";
  let xmlhttp = new XMLHttpRequest();
  let httpString = controlScript + "?gewicht=" + gewicht.value + "&lengte_cm=" + lengte.value;
  let httpResponse = "";
  if (debug) {
    console.log(httpString)
  };
  xmlhttp.open("GET", httpString, true);
  xmlhttp.send();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
      if (debug) console.log("http response = " + xmlhttp.responseText);
      httpResponse = xmlhttp.responseText;
      resultaat.innerHTML = httpResponse;
    }
  }
}
