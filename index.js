
document.getElementById('district').addEventListener('change', function() {
    var district = this.value;
    var subDistrictSelect = document.getElementById('sub_district');
    subDistrictSelect.innerHTML = ''; 
    
    // Clear previous options
    
    // Define sub-districts based on the selected district

    
    var subDistricts = {
        'Ahmednagar':['Ahmednagar (city)', 'Akole', 'Jamkhed', 'Karjat', 'Kopargaon', 'Nagar', 'Nevasa', 'Parner', 'Pathardi', 'Rahata', 'Rahuri', 'Sangamner', 'Shevgaon', 'Shrigonda', 'Shrirampur','Karjat'],
        'Akola':[' Akola (city)', 'Akot', 'Balapur', 'Barshitakli', 'Murtijapur', 'Patur', 'Telhara', 'Washim' ],
        'Amravati':['Amravati (city)', 'Achalpur', 'Chandur Bazar', 'Daryapur', 'Dharni', 'Morshi', 'Nandgaon Khandeshwar', 'Teosa', 'Warud'],
        'Aurangabad':['Aurangabad (city)', 'Kannad', 'Khuldabad', 'Paithan', 'Phulambri', 'Soegaon', 'Vaijapur'],
        'Beed':['Beed (city)', 'Ambajogai', 'Ashti', 'Georai', 'Kaij', 'Majalgaon', 'Parli'],
        'Bhandara':['Bhandara (city)', 'Tumsar', 'Sakoli', 'Mohadi', 'Pauni', 'Lakhani'],
        'Buldhana':['Buldhana (city)', 'Chikhli', 'Deolgaon Raja', 'Jalgaon Jamod', 'Khamgaon', 'Malkapur', 'Mehkar', 'Motala', 'Nandura', 'Sangrampur', 'Shegaon', 'Sindkhed Raja'],
        'Chandrapur':['Chandrapur (city)', 'Ballarpur', 'Bhadravati', 'Bramhapuri', 'Chimur', 'Gondpipri', 'Mul', 'Nagbhir', 'Rajura', 'Sindewahi', 'Warora'],
        'Dhule':['Dhule (city)', 'Sakri', 'Shirpur', 'Sindkheda', 'Shindkhede', 'Taloda'],
        'Gadchiroli':['Gadchiroli (city)', 'Aheri', 'Armori', 'Chamorshi', 'Desaiganj', 'Dhanora', 'Etapalli', 'Korchi', 'Kurkheda', 'Mulchera'],
        'Gondia':['Gondia (city)', 'Amgaon', 'Arjuni Morgaon', 'Deori', 'Goregaon', 'Sadak Arjuni', 'Salekasa', 'Tirora'],
        'Hingoli':['Hingoli (city)', 'Aundha Nagnath', 'Basmath', 'Kalamnuri', 'Sengaon'],
        'Jalgaon':['Jalgaon (city)', 'Amalner', 'Bhadgaon', 'Bhusawal', 'Bodwad', 'Chalisgaon', 'Chopda', 'Dharangaon', 'Erandol', 'Jamner', 'Muktainagar', 'Pachora', 'Parola', 'Raver', 'Yawal'],
        'Jalna':['Jalna (city)', 'Ambad', 'Badnapur', 'Bhokardan', 'Ghansawangi', 'Mantha', 'Partur'],
        'Kolhapur':['Kolhapur (city)', 'Ajara', 'Bavda', 'Bhudargad', 'Chandgad', 'Gadhinglaj', 'Hatkanangle', 'Karvir', 'Kagal', 'Panhala', 'Radhanagari', 'Shirol'],
        'Latur':['Latur (city)', 'Ahmedpur', 'Ausa', 'Chakur', 'Deoni', 'Jalkot', 'Renapur', 'Shirur Anantpal', 'Udgir'],
        'Mumbai City':['South Mumbai', 'South Central Mumbai', 'North Central Mumbai', 'North Mumbai', 'North West Mumbai', 'West Mumbai'],
        'Mumbai Suburban':['Kurla', 'Andheri', 'Borivali', 'Chembur', 'Malad', 'Goregaon', 'Ghatkopar', 'H East (Bandra East)', 'H West (Bandra West)', 'K East (Andheri East)', 'K West (Andheri West)', 'P South (Goregaon)', 'P North (Malad)', 'L (Kurla)', 'M East (Chembur East)', 'M West (Chembur West)', 'N (Ghatkopar)', 'S (Bhandup)', 'T (Mulund)'],
        'Nagpur':['Nagpur (city)', 'Hingna', 'Umred', 'Kamptee', 'Katol', 'Kuhi', 'Narkhed', 'Saoner', 'Parseoni', 'Mouda', 'Ramtek', 'Bhiwapur'],
        'Nanded':['Nanded (city)', 'Bhokar', 'Deglur', 'Dharmabad', 'Hadgaon', 'Kandhar', 'Kinwat', 'Loha', 'Mahur', 'Mudkhed', 'Mukhed', 'Naigaon', 'Umri'],
        'Nandurbar':['Nandurbar (city)', 'Akkalkuwa', 'Akrani', 'Taloda', 'Shahada', 'Nawapur'],
        'Nashik':['Nashik (city)', 'Sinnar', 'Igatpuri', 'Dindori', 'Trimbak', 'Kalwan', 'Chandwad', 'Nandgaon', 'Malegaon', 'Baglan', 'Yeola', 'Satana', 'Niphad', 'Peth', 'Deola'],
        'Osmanabad':['Osmanabad (city)', 'Tuljapur', 'Paranda', 'Bhoom', 'Kalamb', 'Lohara', 'Omerga', 'Washi'],
        'Palghar': ['Palghar (city)', 'Dahanu', 'Jawhar', 'Mokhada', 'Talasari', 'Vasai-Virar (Virar)'],
        'Parbhani': ['Parbhani (city)', 'Gangakhed', 'Jintur', 'Manwath', 'Purna', 'Sailu', 'Sonpeth'],
        'Pune': ['Pune City', 'Haveli', 'Purandar', 'Baramati', 'Daund', 'Shirur', 'Indapur', 'Junnar', 'Ambegaon', 'Khed', 'Velhe', 'Mulshi'],
        'Raigad': ['Alibag', 'Karjat', 'Khalapur', 'Mahad', 'Mangaon', 'Mhasla', 'Murud', 'Panvel', 'Pen', 'Poladpur', 'Roha', 'Shrivardhan', 'Sudhagad Pali', 'Tala'],
        'Ratnagiri': ['Ratnagiri (city)', 'Dapoli', 'Guhagar', 'Chiplun', 'Khed', 'Lanja', 'Rajapur', 'Sangameshwar'],
        'Sangli':['Sangli (city)', 'Miraj', 'Khanapur', 'Tasgaon', 'Palus', 'Kadegaon', 'Kavathe Mahankal', 'Atpadi', 'Jat', 'Shirala'],
        'Satara':['Satara (city)', 'Koregaon', 'Wai', 'Karad', 'Phaltan', 'Maan', 'Khatav', 'Jaoli', 'Patan'],
        'Sindhudurg': ['Malvan', 'Kudal', 'Vengurla', 'Devgad', 'Kankavli', 'Sawantwadi', 'Dodamarg'],
        'Solapur': ['Solapur (city)', 'Akkalkot', 'Barshi', 'Karmala', 'Madha', 'Mangalvedhe', 'Mohol', 'Pandharpur', 'Sangola'],
        'Thane': ['Thane (city)', 'Kalyan', 'Ulhasnagar', 'Ambarnath', 'Badlapur', 'Murbad', 'Shahapur', 'Bhiwandi', 'Wada', 'Palghar'],
        'Wardha': ['Wardha (city)', 'Arvi', 'Ashti', 'Deoli', 'Hinganghat', 'Seloo'],
        'Washim': ['Washim (city)', 'Malegaon', 'Mangrulpir', 'Karanja', 'Risod'],
        'Yavatmal':['Yavatmal (city)', 'Arni', 'Babhulgaon', 'Darwha', 'Digras', 'Ghatanji', 'Kalamb', 'Kelapur', 'Mahagaon', 'Maregaon', 'Ner', 'Pusad', 'Ralegaon', 'Umarkhed', 'Wani', 'Yavatmal'],

        
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

