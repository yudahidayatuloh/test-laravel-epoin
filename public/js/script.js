document.addEventListener('DOMContentLoaded', function() {
    const skeleton = document.getElementById('skeleton');
    const dataTable = document.getElementById('data-table');
    const searchForm = document.getElementById('search-form');
    const confirmAlert = document.getElementById('confirm-alert');

    if (skeleton && dataTable && searchForm) {
        skeleton.style.display = 'block';
        dataTable.style.display = 'none';
        searchForm.style.display = 'none';
        setTimeout(() => {
            skeleton.style.display = 'none';
            dataTable.style.display = 'block';
            searchForm.style.display = 'flex';
        }, 2000);
    }

    if (confirmAlert) {
        setTimeout(() => {
            confirmAlert.style.display = 'none';
        }, 3000);
    }
});