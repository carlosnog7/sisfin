<div class="modal fade modal_editar_valor" id="modalEditarValor" tabindex="-1" aria-labelledby="modalEditarValorLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="modalEditarValorLabel">Editar Valor</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3" id="editarValorForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <label for="acao" class="form-label">Ação</label>
                        <select class="form-control" name="acao" id="acao">
                            <option value="entrada">Entrada</option>
                            <option value="saida">Saída</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="valor" class="form-label">Valor</label>
                        <input type="text" class="form-control" name="valor" id="valor" inputmode="numeric">
                    </div>
                    <div class="col-md-12">
                        <label for="data" class="form-label">Data</label>
                        <input type="date" class="form-control" name="data" id="data">
                    </div>
                    <div class="col-md-12">
                        <label for="descricao" class="form-label">Descrição</label>
                        <input type="text" class="form-control" name="descricao" id="descricao">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fa-solid fa-xmark me-2"></i>Fechar
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa-solid fa-save me-2"></i>Salvar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
