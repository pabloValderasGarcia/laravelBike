(function () {
    
    var table = document.getElementById('personaTable');
    
    if (table) {
        table.addEventListener('click', clickTable);
    }
    
    function clickTable(event) {
        var target = event.target;
        if (target.tagName.toLowerCase() === 'a' && target.getAttribute('class') === 'deleteRow') {
            let name = target.dataset.name;
            let url = target.dataset.url;
            confirmDelete(name, url);
        }
    }
    
    function confirmDelete(name, url) {
        let form = document.getElementById('deleteForm');
        if (confirm('Borrar ' + name+ '?')) {
            form.action = url;
            form.submit();
        } else {
            form.action = "";
        }
    }
    
})()