function deleteRegistroPaginacao(rotaUrl, idDoRegistro) {
        var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        if(confirm('Deseja Excluir?')){
        $.ajax({
            url: rotaUrl,
            method: 'DELETE',
            headers: {'X-CSRF-TOKEN': token},
            data: {
                id: idDoRegistro,
            },
            beforeSend: function () {
                $.blockUI({
                    message: 'Carregando...',
                    timeout: 2000,
                });
            },
        }).done(function(data){
            $.unblockUI();
        if (data.success == true){
            window.location.reload();
        }
        else{
            alert('Não foi Possível Excluir')
        }
        }).fail(function(data){
            $.unblockUI();
            alert('Não foi possível buscar os dados');
        });

    }
}
