
document.getElementById('district').addEventListener('change', function() {
    var district = this.value;
    var subDistrictSelect = document.getElementById('sub_district');
    subDistrictSelect.innerHTML = ''; 
    
    // Clear previous options
    
    // Define sub-districts based on the selected district

    var subDistricts = {

        'Mumbai': ['Andheri', 'Bandra', 'Colaba'],
        'Pune': ['Pune City ', 'Baramati', 'Junnar','Ambegaon','Khed','Mawal','Mulshi','Shirur','Haveli','Daund','Indapur','Purandar','Velhe']
          

        // Add more districts and their corresponding sub-districts as needed
    };
    
    // Populate sub-district options

    subDistricts[district].forEach(function(subDistrict) 
    {
        var option = document.createElement('option');
        option.value = subDistrict;
        option.text = subDistrict;
        subDistrictSelect.appendChild(option);

    });
});

