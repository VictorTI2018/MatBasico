<?php


function __($message)
{
    echo json_encode($message);
}

function templateResultado($valor1, $valor2, $operacao, $resultado)
{
    $html =  ' <div class="card shadow-lg ">
    <div class="card-header">
        Resultado
    </div>
    <div class="card-body">
        <form>
            <div class="row">
                <div class="col-md-4">
                    <div class="operacao">

                        <select name="operacao" disabled id="operacao" class="form-control">
                            <option value="' . $operacao . '">'.$operacao.'</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="d-flex flex-column">
                        <div class="form-group">
                            <label for="valor1">1° Valor</label>
                            <input type="number" name="valor1" id="valor1"
                                disabled class="form-control" value="' . $valor1 . '">
                        </div>
                        <div class="form-group">
                            <label for="valor2">2° Valor</label>
                            <input type="number" name="valor2" id="valor2"
                                class="form-control" disabled value="' . $valor2 . '">
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="card-footer">
        <div class="d-flex justify-content-end">
            <p class="text-danger h3">' . $resultado . '</p>
        </div>
    </div>
</div>
</div>';
    return $html;
}
