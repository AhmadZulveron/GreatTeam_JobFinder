$(document).ready(function() {
    var selectedTags = [];

    $('#tags').select2({ // Menggunakan id yang sesuai
        tags: true,
        tokenSeparators: [',', ' '],
        placeholder: 'Pilih atau tambahkan tag',
    });

    $('#tags').on('change', function() { // Menggunakan id yang sesuai
        selectedTags = $('#tags').select2('data').map(function(tag) {
            return tag.text;
        });

        displaySelectedTags();
    });

    function displaySelectedTags() {
        var selectedTagsDiv = $('#selectedTags');
        selectedTagsDiv.empty();

        selectedTags.forEach(function(tag) {
            selectedTagsDiv.append('<span class="badge badge-primary">' + tag + '</span> ');
        });
    }

    displaySelectedTags();
});

const bulanAkhir = document.getElementById('bulan-berakhir');
const tahunAkhir = document.getElementById('tahun-berakhir');
    $(document).ready(function() {
        $('input[name="pend"]').change(function() {
            if (this.checked) {
                bulanAkhir.disabled = true;
                tahunAkhir.disabled = true;
            } else {
                bulanAkhir.disabled = false;
                tahunAkhir.disabled = false;
            }
        });
    });