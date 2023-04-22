const { Component } = require("react");

export default class GestaoEstoque extends Component {
    render() {
        return (
            <div>
                <div id="hidden"></div>
                <div className="container">
                    <div className="box-gestao">
                        <div>
                            <h2 className="title">Gestão de estoque</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Código de barras</th>
                                        <th>Imagem</th>
                                        <th>Nome</th>
                                        <th>Quantidade</th>
                                        <th>Ação</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <tr>
                                        <td>0001</td>
                                        <td>-</td>
                                        <td>Arroz</td>
                                        <td>20</td>
                                        <td><a href="#">Editar</a> | <a href="#">Apagar</a></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div id="teste">
                            <form action="" className="form-cadastro-produto">
                                <h2 className="color-white">Cadastrar novo produto</h2>
                                <input type="text" placeholder="Codigo de barrar produto" />
                                <input type="file" placeholder="Imagem" />
                                <input type="text" placeholder="Nome do produto" />
                                <input type="text" placeholder="Valor" />
                                <input type="submit" value="Cadastrar"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        )
    }
}
