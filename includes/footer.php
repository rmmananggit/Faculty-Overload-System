
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>USTP</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="£">Petalcorin and Friends</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <!-- address java script -->
  <script>
document.addEventListener('DOMContentLoaded', () => {
  fetch('assets/js/address.json')
    .then(response => response.json())
    .then(data => {
      populateRegions(data);
    });

  function populateRegions(data) {
    const regionDropdown = document.getElementById('regionDropdown');
    const provinceDropdown = document.getElementById('provinceDropdown');
    const municipalityDropdown = document.getElementById('municipalityDropdown');
    const barangayDropdown = document.getElementById('barangayDropdown');

    // Add regions to dropdown
    for (let key in data) {
      const region = data[key];
      regionDropdown.add(new Option(region.region_name, key));
    }

    regionDropdown.addEventListener('change', function() {
      const selectedRegionKey = this.value;
      const provinceList = data[selectedRegionKey].province_list;
      populateProvinces(provinceList);
    });

    function populateProvinces(provinceList) {
      provinceDropdown.innerHTML = '<option selected disabled value="">Choose...</option>';
      for (let province in provinceList) {
        provinceDropdown.add(new Option(province, province));
      }

      provinceDropdown.addEventListener('change', function() {
        const selectedProvince = this.value;
        const municipalityList = provinceList[selectedProvince].municipality_list;
        populateMunicipalities(municipalityList);
      });
    }

    function populateMunicipalities(municipalityList) {
      municipalityDropdown.innerHTML = '<option selected disabled value="">Choose...</option>';
      for (let municipality in municipalityList) {
        municipalityDropdown.add(new Option(municipality, municipality));
      }

      municipalityDropdown.addEventListener('change', function() {
        const selectedMunicipality = this.value;
        const barangayList = municipalityList[selectedMunicipality].barangay_list;
        populateBarangays(barangayList);
      });
    }

    function populateBarangays(barangayList) {
      barangayDropdown.innerHTML = '<option selected disabled value="">Choose...</option>';
      barangayList.forEach(barangay => {
        barangayDropdown.add(new Option(barangay, barangay));
      });
    }
  }
});
</script>

<!-- Script for phone number -->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const phoneInput = document.getElementById('validationCustom04');

  phoneInput.addEventListener('input', () => {
    // Remove non-numeric characters and ensure the length does not exceed 9
    phoneInput.value = phoneInput.value.replace(/\D/g, '').slice(0, 9);
  });
});
</script>
</body>

</html>