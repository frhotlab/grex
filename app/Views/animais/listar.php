    <!-- Modal - Novo -->
    <div class="modal fade" id="modal-novo-animal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="/grex/public/animais/cadastrar" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Novo Animal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">Id</label>
                                    <input type="text" class="form-control" name="Id2" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">Código</label>
                                    <input type="text" class="form-control" name="codigo">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Sisbov</label>
                                    <input type="text" class="form-control" name="sisbov">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" name="nome">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <div class="form-group">
                                    <label for="">Sexo</label>
                                    <select class="custom-select" name="sexo">
                                        <option>F</option>
                                        <option>M</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">Data Nascimento</label>
                                    <input type="date" class="form-control" name="data_nascimento" value="<?php echo date('Y-m-d'); ?>">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.Modal Novo-->
    <!-- Modal - Editar -->
    <div class="modal fade" id="modal-editar-animal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form action="/grex/public/animais/editar" method="post">
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Animal</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="form-group">
                                <label for="">Id</label>
                                <input type="" id="modal-editar-animal-id" name="id"> <!--type=hidden-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <label for="">Código</label>
                                    <input type="text" class="form-control" id="modal-editar-animal-codigo" name="codigo">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-group">
                                    <label for="">Sisbov</label>
                                    <input type="text" class="form-control" id="modal-editar-animal-sisbov" name="sisbov">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Nome</label>
                                    <input type="text" class="form-control" id="modal-editar-animal-nome" name="nome">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2" style="width: 60px; padding:10,0,0,0;">
                                <div class="form-group">
                                    <label for="">Sexo</label>
                                    <select class="custom-select" id="modal-editar-animal-sexo" name="sexo">
                                        <option>F</option>
                                        <option>M</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="form-group">
                                    <label for="">Data Nascimento</label>
                                    <input type="date" class="form-control" id="modal-editar-animal-data_nascimento" name="data_nascimento">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.Modal Editar-->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Animais</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Animais</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <!--BarModal -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-novo-animal">
                                    <i class="fas fa-plus-circle"></i> Novo Animal
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.BarModal -->
                <!-- Alerta-->
                <?php if (isset($_GET['alert']) && $_GET['alert'] == "successCreate") : ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
                                Animal cadastrado com sucesso!
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (isset($_GET['alert']) && $_GET['alert'] == "successDelete") : ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
                                Animal excluído com sucesso!
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (isset($_GET['alert']) && $_GET['alert'] == "successEdit") : ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Sucesso!</h5>
                                Animal alterado com sucesso!
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <!-- /.Alerta -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Id:</th>
                                            <th>Código</th>
                                            <th>Sisbov</th>
                                            <th>Nome</th>
                                            <th>Sexo</th>
                                            <th>Data Nascimento</th>
                                            <th>Ações</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($animais as $ani) : ?>
                                            <tr>
                                                <td><?= $ani['id'] ?> </td>
                                                <td><?= $ani['codigo'] ?> </td>
                                                <td><?= $ani['sisbov'] ?> </td>
                                                <td><?= $ani['nome'] ?> </td>
                                                <td><?= $ani['sexo'] ?> </td>
                                                <td><?= $ani['data_nascimento'] ?> </td>
                                                <td>
                                                    <!--<button type="button" class="btn btn-warning" onclick="prepararDados(<?= $ani['id'] ?>, '<?= $ani['codigo'] ?>', '<?= $ani['sisbov'] ?>', '<?= $ani['nome'] ?>', '<?= $ani['sexo'] ?>', '<?= $ani['data_nascimento'] ?>')"><i class="fas fa-edit"></i></button> -->
                                                    <button type="button" class="btn btn-warning" onclick=" prepararDados(<?= $ani['id'] ?>, '<?= $ani['codigo'] ?>', '<?= $ani['sisbov'] ?>', '<?= $ani['nome'] ?>', '<?= $ani['sexo'] ?>', '<?= $ani['data_nascimento'] ?>' )"><i class="fas fa-edit"></i></button>

                                                    <a href="excluir/<?= $ani['id'] ?>" class="btn btn-danger"> <i class="fas fa-trash"> </i></a>
                                                    <a href="excluir/<?= $ani['id'] ?>" class="btn btn-danger"> <i class="fas fa-trash"> </i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <script>
        function prepararDados(Id, Codigo, Sisbov, Nome, Sexo, DataNasc) {
            document.getElementById('modal-editar-animal-id').value = Id;
            document.getElementById('modal-editar-animal-codigo').value = Codigo;
            document.getElementById('modal-editar-animal-sisbov').value = Sisbov;
            document.getElementById('modal-editar-animal-nome').value = Nome;
            document.getElementById('modal-editar-animal-sexo').value = Sexo;
            document.getElementById('modal-editar-animal-data_nascimento').value = DataNasc;
            $('#modal-editar-animal').modal('show');
        }
    </script>