
import {Route, Routes} from "react-router-dom";
import FrenteCaixa from "../pages/FrenteCaixa";
import GestaoProdutos from "../pages/GestaoProdutos";
import GestaoEstoque from "../pages/GestaoEstoque";

function Main(){
    return (
        <main>
            <Routes>
                <Route  path="/" element={<FrenteCaixa/>} />
                <Route  path="/gestao-produtos" element={<GestaoProdutos/>} />
                <Route  path="/gestao-estoque" element={<GestaoEstoque/>} />
             </Routes>
        </main>
    )
   }
   
   export default Main;