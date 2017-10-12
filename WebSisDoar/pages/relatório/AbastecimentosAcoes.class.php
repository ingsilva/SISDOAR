    public function pesquisarRelatorio($ano, $mes, $id_pessoa, $id_tipo, $pdf, $obra = NULL) {
        $pdo = Dao::getInstance();
        $abastecimentoDao = new AbastecimentoDao();
        $abastecimento = new AbastecimentoTabela();
        $filtro = "";
        //***********************************************************************************************************
        if (empty($ano) == false && empty($mes) == true && empty($id_pessoa) == true && empty($id_tipo) == true) {
            $filtro = "and year(a.dt_data) = $ano";
        } elseif (empty($ano) == false && empty($mes) == false && empty($id_pessoa) == true && empty($id_tipo) == true) {
            $filtro = "and year(a.dt_data) = $ano and month(a.dt_data)= $mes";
        } elseif (empty($ano) == false && empty($mes) == false && empty($id_pessoa) == false && empty($id_tipo) == true) {
            if($obra==0){
                $filtro = "and year(a.dt_data) = $ano and month(a.dt_data)= $mes and f.id_pessoa= $id_pessoa";
            }
            if($obra==1){
                $filtro = "and year(a.dt_data) = $ano and month(a.dt_data)= $mes and l.id_local= $id_pessoa";
            }
        } elseif (empty($ano) == false && empty($mes) == false && empty($id_pessoa) == false && empty($id_tipo) == false) {
            if($obra==0){
                $filtro = "and year(a.dt_data) = $ano and month(a.dt_data)= $mes and f.id_pessoa= $id_pessoa and tb.id_tipo= $id_tipo";
            }
            if($obra==1){
                $filtro = "and year(a.dt_data) = $ano and month(a.dt_data)= $mes and l.id_local= $id_pessoa and tb.id_tipo= $id_tipo";
            }
        } elseif (empty($ano) == true && empty($mes) == false && empty($id_pessoa) == true && empty($id_tipo) == true) {
            $filtro = "and month(a.dt_data)= $mes";
        } elseif (empty($ano) == true && empty($mes) == false && empty($id_pessoa) == false && empty($id_tipo) == true) {
            if($obra==0){
                $filtro = "and month(a.dt_data)= $mes and f.id_pessoa= $id_pessoa";
            }
            if($obra==1){
                $filtro = "and month(a.dt_data)= $mes and l.id_local= $id_pessoa";
            }
        } elseif (empty($ano) == true && empty($mes) == false && empty($id_pessoa) == false && empty($id_tipo) == false) {
            $filtro = "and month(a.dt_data)= $mes and f.id_pessoa= $id_pessoa and tb.id_tipo= $id_tipo";
        } elseif (empty($ano) == true && empty($mes) == true && empty($id_pessoa) == true && empty($id_tipo) == false) {
            $filtro = "and tb.id_tipo= $id_tipo";
        } elseif (empty($ano) == true && empty($mes) == true && empty($id_pessoa) == false && empty($id_tipo) == true) {
            if($obra==0){
                $filtro = "and f.id_pessoa = $id_pessoa";
            }
            if($obra==1){
                $filtro = "and l.id_local = $id_pessoa";
            }
        } elseif (empty($ano) == true && empty($mes) == true && empty($id_pessoa) == false && empty($id_tipo) == false) {
            if($obra==0){
                $filtro = "and f.id_pessoa = $id_pessoa and tb.id_tipo= $id_tipo";
            }
            if($obra==1){
                $filtro = "and l.id_local = $id_pessoa and tb.id_tipo= $id_tipo";
            }
        } elseif (empty($ano) == false && empty($mes) == true && empty($id_pessoa) == false && empty($id_tipo) == true) {
            if($obra==0){
                $filtro = "and year(a.dt_data) = $ano and f.id_pessoa= $id_pessoa";
            }
            if($obra==1){
                $filtro = "and year(a.dt_data) = $ano and l.id_local= $id_pessoa";
            }
        } elseif (empty($ano) == false && empty($mes) == true && empty($id_pessoa) == false && empty($id_tipo) == false) {
            if($obra==0){
                $filtro = "and year(a.dt_data) = $ano and f.id_pessoa= $id_pessoa and tb.id_tipo= $id_tipo";
            }
            if($obra==1){
                $filtro = "and year(a.dt_data) = $ano and l.id_local= $id_pessoa and tb.id_tipo= $id_tipo";
            }
        } elseif (empty($ano) == false && empty($mes) == true && empty($id_pessoa) == true && empty($id_tipo) == false) {
            $filtro = "and year(a.dt_data) = $ano and tb.id_tipo= $id_tipo";
        } elseif (empty($ano) == true && empty($mes) == false && empty($id_pessoa) == true && empty($id_tipo) == false) {
            $filtro = "and month(a.dt_data)= $mes and tb.id_tipo= $id_tipo";
        } else {
            return false;
        }