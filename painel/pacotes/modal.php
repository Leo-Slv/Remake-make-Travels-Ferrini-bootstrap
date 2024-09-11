<!-- Modal de Upload!-->
<div class="modal fade" id="upload" data-backdrop="static">
    <div class="modal-dialog modal-md div modal-content">
        <form method="post" enctype="multipart/form-data" class="form-group">
            <div class="modal-header">
                Upload Pacote
            </div>
            <div class="modal-body">
                <input type="file" name="imagem" class="form-control">
                <br>
                <Textarea name='destino' class="form-control" rows="1" placeholder="Nome do Destino"></Textarea>
                <br>
                <Textarea name="periodo" class="form-control" rows="2" placeholder="Periodo"></Textarea>
                <br>
                <Textarea name="acomodacao" class="form-control" rows="3" placeholder="Descrição da Acomodação"></Textarea>
                <br>
                <label> Quantidade de Parcelas</label>
                <select name="parcela" class="form-control" placeholder="Quantidade de Parcelas">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
                <br>
                <select name="status" class="form-control">
                    <option value="1">ativo</option>
                    <option value="0">inativo</option>
                </select>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dimiss="modal">
                    Fechar
                </button>
                <input type="submit" class="btn btn-primary" name="action" value="Cadastrar">
            </div>
        </form>
    </div>
</div>

<!-- Modal de edit!-->
<div class="modal fade" id="edit" data-backdrop="static">
    <div class="modal-dialog modal-md div modal-content">
        <form method="post" enctype="multipart/form-data" class="form-group">
            <div class="modal-header">
                Editar Pacote
            </div>
            <div class="modal-body">
                <Textarea name="cd" id="cd" class="form-control" rows="1" placeholder="Código do pacote"></Textarea>
                <br>
                <Textarea name="destino" id="destino" class="form-control" rows="1" placeholder="Nome do Destino"></Textarea>
                <br>
                <Textarea name="periodo" id="periodo" class="form-control" rows="2" placeholder="Periodo"></Textarea>
                <br>
                <Textarea name="acomodacao" id="acomodacao" class="form-control" rows="3" placeholder="Descrição da Acomodação"></Textarea>
                <br>
                <label> Quantidade de Parcelas</label>
                <select name="parcela" id="parcela" class="form-control" placeholder="Quantidade de Parcelas">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
                <br>
                <select name="status" id="status" class="form-control">
                    <option value="1">ativo</option>
                    <option value="0">inativo</option>
                </select>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dimiss="modal">
                    Fechar
                </button>
                <input type="submit" class="btn btn-info" name="action" value="Alterar">
            </div>
        </form>
    </div>
</div>

<!-- Modal de delete!-->
<div class="modal fade" id="delete" data-backdrop="static">
    <div class="modal-dialog modal-md div modal-content">
        <form method="post" enctype="multipart/form-data" class="form-group">
            <div class="modal-header">
                Exlcuir 
            </div>
            <div class="modal-body">
                <input type="text" name="cd" class="form-control" id="cd">
                <br>
                <input type="text" name="imagem" id="imagem" class="form-control">
                    <h4 class="text-danger font-weight-bolder">
                        Deseja realmente exlcuir este item?
                    </h4>
            </div>
            <div class="modal-footer">
                <button class="btn btn-secondary" data-dimiss="modal">
                    Fechar
                </button>
                <input type="submit" class="btn btn-danger" name="action" value="Excluir">
            </div>
        </form>
    </div>
</div>