<!-- Modal -->
<div class="modal fade" id="modalForm" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="TituloModal">Ficha de inscrição</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <p><small>( * ) - Informações devem ser preenchidas.</small></p>
                    <form action="{{route('site-subscription')}}" name="form_contato" method="post">
                        {{csrf_field()}}
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="name" class="control-label">Nome:<span class="required">*</span></label>
                                    <input class="form-control" type="text" name="name" data-required="1"
                                        placeholder="Nome do visitante" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="birthday" class="control-label">Data de
                                        Nascimento:<span class="required">*</span></label>
                                    <input class="form-control" type="date" name="birthday" id="birthday"
                                        pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="1930-01-01" max="2017-01-31" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone" class="control-label">Número
                                        contato:<span class="required">*</span></label>
                                    <input class="form-control" type="tel" name="phone" id="phone"
                                        placeholder="(99) 9999-9999" pattern="{1,10}" required />
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="email" class="control-label">Email:<span
                                            class="required">*</span></label>
                                    <input class="form-control" type="email" name="email" id="email"
                                        placeholder="E-mail" x-autocompletetype="email" required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="marital_status" class="control-label">Estado
                                        Civil:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="marital_status"
                                            id="marital_status1" value="Solteiro" checked>
                                        <label class="form-check-label" for="marital_status1">
                                            Solteiro
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="marital_status"
                                            id="marital_status2" value="Casado">
                                        <label class="form-check-label" for="marital_status2">
                                            Casado
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="marital_status"
                                            id="marital_status3" value="Divorciado">
                                        <label class="form-check-label" for="marital_status3">
                                            Divorciado
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="children" class="control-label">Possui
                                        Filhos: </label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="children" id="children1"
                                            value="Sim" checked>
                                        <label class="form-check-label" for="children1">
                                            Sim
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="children" id="children2"
                                            value="Nao">
                                        <label class="form-check-label" for="children2">
                                            Não
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label for="form-payment" class="control-label">Forma de
                                    pagamento<span class="required">*</span></label>
                                <div class="input-group mb-3">
                                    <select class="custom-select" id="pay" name="pay" required>
                                        <option selected value="">Escolher...</option>
                                        <option value="Deposito">Deposito Bancário</option>
                                        <option value="Cartao">Cartão de credito</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="enterprise" class="control-label">Empresa:<span
                                            class="required">*</span></label>
                                    <input class="form-control" type="text" name="enterprise" id="enterprise"
                                        placeholder="Empresa" required />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="role" class="control-label">Cargo:<span
                                            class="required">*</span></label>
                                    <input class="form-control" type="text" name="role" id="role" placeholder="Cargo"
                                        required />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="address" class="control-label">Endereço:<span
                                            class="required">*</span></label>
                                    <input class="form-control" type="text" name="address" id="address"
                                        placeholder="Endereço" required />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="number" class="control-label">Número:<span
                                            class="required">*</span></label>
                                    <input class="form-control" type="text" name="number" id="number"
                                        placeholder="Número" pattern="{1,5}" required />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="academic_education" class="control-label">Formação
                                Acadêmica:</label>
                            <input class="form-control" type="text" name="academic_education" id="academic_education"
                                placeholder="Formação Acadêmica" />
                        </div>
                        <div class="form-group">
                            <label for="midicines" class="control-label">Toma algum
                                medicamento:</label>
                            <input class="form-control" type="text" name="medicines" id="midicines"
                                placeholder="Toma algum medimaneto" />
                        </div>
                        <div class="form-group">
                            <label for="special_needs" class="control-label">Tem alguma Necessidade
                                Especial:</label>
                            <input class="form-control" type="text" name="special_needs" id="special_needs"
                                placeholder="Necessidade Especial" />
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="allergy" class="control-label">Tem algum
                                        tipo de alergia:</label>
                                    <input class="form-control" type="text" name="allergy" id="allergy"
                                        placeholder="Alergia?" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="food" class="control-label">Tem alguma
                                        restrição alimentar:</label>
                                    <input class="form-control" type="text" name="food" id="food"
                                        placeholder="Restrição Alimentar" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message" class="control-label">Observação:</label>
                            <textarea class="form-control" name="message" id="message" rows="3"
                                placeholder="Precisar inserir mais alguma informação?"></textarea>
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="terms" id="exampleCheck1" required>
                            <label class="form-check-label" for="terms">
                                <a href="#" data-toggle="modal" data-target="#modalTerms">Li e aceito os
                                    termos aqui estipulados.</a>
                            </label>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade text-justify" id="modalTerms" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Termos de uso</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p> Declaro que ao concluir a ficha de inscrição do treinamento
                                            <b>O Profeta e o Gestor</b>, automaticamente assumo os
                                            termos
                                            descritos
                                            abaixo;
                                        </p>
                                        <br>
                                        <h5>DO USO DE IMAGEM</h5>
                                        <p>Autorizo o uso de minha imagem em todo território nacional e
                                            no
                                            exterior, das seguintes formas: (I) out-door; (II) busdoor;
                                            folhetos em geral (encartes, mala direta, catálogo, etc.);
                                            (III)
                                            folder de apresentação; (IV) anúncios em revistas e jornais
                                            em
                                            geral; (V) home page; (VI) cartazes; (VII) back-light;
                                            (VIII)
                                            mídia eletrônica (painéis, vídeo-tapes, televisão, cinema,
                                            programa para rádio, entre outros). Por esta ser a expressão
                                            da
                                            minha vontade declaro que autorizo o uso acima descrito sem
                                            que
                                            nada haja a ser reclamado a título de direitos conexos à
                                            minha
                                            imagem ou a qualquer outro.</p>
                                        <h5>DA PERMANÊNCIA</h5>
                                        <p>Ao inscrever-se por livre vontade no treinamento O Profeta e
                                            o
                                            Gestor, declaro estar ciente de que o treinamento tem início
                                            na
                                            sexta-feira e seu término é somente no domingo final da
                                            tarde,
                                            sendo então três dias correntes e resultando em uma carga
                                            horária de 40 horas.</p>
                                        <h5>DA DESISTÊNCIA:</h5>
                                        <p>O campista no qual venha a desistir do treinamento durante os
                                            dias acordados ao fazer a inscrição e aceitar os termos, não
                                            terá direito a reembolso ao valor do treinamento.
                                            Caso aconteça algum imprevisto citado abaixo na data do
                                            treinamento, automaticamente sua ficha é transferida para um
                                            próximo:</p>
                                        <ul>
                                            <li>Doença ou Vírus;</li>
                                            <li>Nascimento de Filhos;</li>
                                            <li>Falecimento de Parente.</li>
                                        </ul>
                                        <h5>DO CANCELAMENTO</h5>
                                        <p>Após a data de compra, se algum imprevisto vir a acontecer, o
                                            campista pode solicitar o reembolso 07 dias antes da data
                                            inicial do treinamento ou a transferência de sua inscrição
                                            para
                                            o próximo evento. Caso não seja avisado dentro do prazo
                                            estipulado de 15 dias, a instituição só devolverá 50% do
                                            valor
                                            pago, decorrente aos investimentos feitos com a produção
                                            antecipada dos materiais didáticos.</p>

                                        <p>Os termos aqui descritos, são de responsabilidade do campista
                                            e
                                            da instituição. Caso venha a acontecer algum descumprimeito
                                            dos
                                            termos, deve-se entrar em contato com a instituição para que
                                            seja feito acordos.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger"
                                            data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="reset" class="campo_submit btn btn-primary limpar-btn" value="Limpar" />
                        <input type="submit" class="campo_submit btn btn-success pagar-btn" value="Inscreva-se/Pagar" />
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>