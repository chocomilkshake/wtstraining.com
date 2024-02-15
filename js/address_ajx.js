$(document).ready(function () {
    $('#region').change(function () {
        var selectedRegion = $(this).val();

        if (selectedRegion !== "") {
            $.ajax({
                type: 'POST',
                url: 'include/province.php',
                data: { region: selectedRegion },
                success: function (response) {
                    $('#province').html(response);
                },
                error: function () {
                    console.log('Error fetching provinces');
                }
            });
        }
    });

    $('#province').change(function () {
        var selectedProvince = $(this).val();

        if (selectedProvince !== "") {
            $.ajax({
                type: 'POST',
                url: 'include/city.php',
                data: { province: selectedProvince },
                success: function (response) {
                    $('#city').html(response);
                },
                error: function () {
                    console.log('Error fetching provinces');
                }
            });
        }
    });

    $('#city').change(function () {
        var selectedCity = $(this).val();

        if (selectedCity !== "") {
            $.ajax({
                type: 'POST',
                url: 'include/brgy.php',
                data: { city: selectedCity },
                success: function (response) {
                    $('#brgy').html(response);
                },
                error: function () {
                    console.log('Error fetching provinces');
                }
            });
        }
    });

});
