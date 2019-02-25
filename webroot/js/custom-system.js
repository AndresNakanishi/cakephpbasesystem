system = {
    showSwal: function(title, message, type, url){
        if(type == 'delete'){
          Swal.fire({
            title: title,
            text: message,
            type: 'question',
            showCancelButton: true,
            confirmButtonClass: 'btn btn-success',
            cancelButtonClass: 'btn btn-danger',
            confirmButtonText: 'Ok!',
            cancelButtonText: 'No',
            buttonsStyling: false
          }).then((result) => {
            if (result.value) {
              window.location.href = url;
            }
          });
      	}
    }
};