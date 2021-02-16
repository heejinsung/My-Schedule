<footer>
   <p>Designed by MyDesign : mydesign@no-site.com</p>
</footer>

<script>
  let pathname = window.location.pathname;
  let changeTit = document.querySelector('#title');
  let rateNum = document.querySelectorAll('.rateNum');

  if(pathname.includes('input_form')){
      changeTit.innerHTML = "Schedule Input";

      for (let i =0; i < rateNum.length; i++){
         rateNum[i].readOnly = true;
      }
  } else if (pathname.includes('sch_view')) {
      changeTit.innerHTML = "Schedule Borad";
  } else if (pathname.includes('detail_view')) {
      changeTit.innerHTML = "Detail Schedule";
  }


</script>