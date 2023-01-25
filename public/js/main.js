let aprBtn = document.getElementById('aprbtn');

function approve(){
    if (aprBtn.textContent == 'Approve'){
        aprBtn.textContent = 'Disapprove'
    }
    else{
        aprBtn.textContent = 'Approve'
    }
}