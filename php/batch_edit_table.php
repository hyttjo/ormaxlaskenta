                    <div class="background-black padding-20px border-round-10px">
                        <table id="batch_edit_table" class="full-width">
                            <tr>
                                <th>Taulukko</th>
                                <th>Vertailu sarake</th>
                                <th>Logiikka</th>
                                <th>Vertailu arvo</th>
                                <th>Muutos sarake</th>
                                <th>Muutos arvo</th>
                            </tr>
                            <tr>
                                <td>
								    <select id="table_selection">
                                        <option value="tarjoukset">Tarjoukset</option>
                                        <option value="tilaukset">Tilaukset</option>
                                        <option value="lisatarviketarjoukset">Lisätarviketarjoukset</option>
                                    </select>
							    </td>
                                <td>
								    <select id="first_column_selection">
                                        <option value="id" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">ID</option>
                                        <option value="pvm" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">Pvm</option>
                                        <option value="tiili" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset" selected>Tiili</option>
                                        <option value="vari" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">Väri</option>
                                        <option value="kattoturva" class="option-tarjoukset option-tilaukset">Kattoturva</option>
                                        <option value="sadevesi" class="option-tarjoukset option-tilaukset">Sadevesi</option>
                                        <option value="muoto" class="option-tarjoukset option-tilaukset">Katon muoto</option>
                                        <option value="kaltevuus" class="option-tarjoukset option-tilaukset">Katon kaltevuus</option>
                                        <option value="paaty" class="option-tarjoukset option-tilaukset">Päätymateriaali</option>
                                        <option value="toimitustapa" class="option-tarjoukset option-tilaukset">Toimitustapa</option>
                                        <option value="asiakasryhma" class="option-tarjoukset option-tilaukset">Asiakasryhmä</option>
                                        <option value="asiakasnumero" class="option-tarjoukset option-tilaukset">Asiakasnumero</option>
                                        <option value="asiakasnimi" class="option-tarjoukset option-tilaukset">Asiakasnimi</option>
                                        <option value="viite" class="option-tarjoukset option-tilaukset">Viite</option>
                                        <option value="talotehdas" class="option-lisatarviketarjoukset">Talotehdas</option>
                                        <option value="ostotilausnro" class="option-lisatarviketarjoukset">Ostotilausnumero</option>
                                        <option value="nimi" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">Nimi</option>
                                        <option value="puh" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">Puhelin</option>
                                        <option value="email" class="option-lisatarviketarjoukset">Email</option>
                                        <option value="kontaktihenkilo" class="option-lisatarviketarjoukset">Yhteyshenkiö</option>
                                        <option value="katunimi" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">Katunimi</option>
                                        <option value="katunumero" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">Katunumero</option>
                                        <option value="postinumero" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">Postinumero</option>
                                        <option value="kaupunki" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">Kunta</option>
                                        <option value="tekija" class="option-tarjoukset option-tilaukset">Tekijä</option>
                                        <option value="paivienkesto" class="option-tarjoukset option-tilaukset">Päivien kesto</option>
                                        <option value="laskennankesto" class="option-tarjoukset option-tilaukset">Laskennankesto</option>
                                        <option value="asiakkaanvastuulla" class="option-tarjoukset">Määrät as. vastuulla</option>
                                        <option value="hinta" class="option-lisatarviketarjoukset">Hinta</option>
                                        <option value="toimituspvm" class="option-lisatarviketarjoukset">Toimitus Pvm</option>
                                    </select>
							    </td>
                                <td>
								    <select id="logic_selection">
                                        <option value="is">ON</option>
                                        <option value="not">EI OLE</option>
                                        <option value="include">SISÄLTÄÄ</option>
                                    </select>
							    </td>
                                <td>
								    <input id="first_input" type="text"></input>
							    </td>
                                <td>
								    <select id="second_column_selection">
                                        <option value="id" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">ID</option>
                                        <option value="pvm" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">Pvm</option>
                                        <option value="tiili" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset" selected>Tiili</option>
                                        <option value="vari" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">Väri</option>
                                        <option value="kattoturva" class="option-tarjoukset option-tilaukset">Kattoturva</option>
                                        <option value="sadevesi" class="option-tarjoukset option-tilaukset">Sadevesi</option>
                                        <option value="muoto" class="option-tarjoukset option-tilaukset">Katon muoto</option>
                                        <option value="kaltevuus" class="option-tarjoukset option-tilaukset">Katon kaltevuus</option>
                                        <option value="paaty" class="option-tarjoukset option-tilaukset">Päätymateriaali</option>
                                        <option value="toimitustapa" class="option-tarjoukset option-tilaukset">Toimitustapa</option>
                                        <option value="asiakasryhma" class="option-tarjoukset option-tilaukset">Asiakasryhmä</option>
                                        <option value="asiakasnumero" class="option-tarjoukset option-tilaukset">Asiakasnumero</option>
                                        <option value="asiakasnimi" class="option-tarjoukset option-tilaukset">Asiakasnimi</option>
                                        <option value="viite" class="option-tarjoukset option-tilaukset">Viite</option>
                                        <option value="talotehdas" class="option-lisatarviketarjoukset">Talotehdas</option>
                                        <option value="ostotilausnro" class="option-lisatarviketarjoukset">Ostotilausnumero</option>
                                        <option value="nimi" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">Nimi</option>
                                        <option value="puh" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">Puhelin</option>
                                        <option value="email" class="option-lisatarviketarjoukset">Email</option>
                                        <option value="kontaktihenkilo" class="option-lisatarviketarjoukset">Yhteyshenkiö</option>
                                        <option value="katunimi" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">Katunimi</option>
                                        <option value="katunumero" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">Katunumero</option>
                                        <option value="postinumero" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">Postinumero</option>
                                        <option value="kaupunki" class="option-tarjoukset option-tilaukset option-lisatarviketarjoukset">Kunta</option>
                                        <option value="tekija" class="option-tarjoukset option-tilaukset">Tekijä</option>
                                        <option value="paivienkesto" class="option-tarjoukset option-tilaukset">Päivien kesto</option>
                                        <option value="laskennankesto" class="option-tarjoukset option-tilaukset">Laskennankesto</option>
                                        <option value="asiakkaanvastuulla" class="option-tarjoukset">Määrät as. vastuulla</option>
                                        <option value="hinta" class="option-lisatarviketarjoukset">Hinta</option>
                                        <option value="toimituspvm" class="option-lisatarviketarjoukset">Toimitus Pvm</option>
                                    </select>
							    </td>
                                <td>
								    <input id="second_input" type="text"></input>
							    </td>
                                <tr>
								    <td colspan="6">
								        <button class="btn btn-danger margin-top-20px">Suorita</button>

                                        <div class="batchEdit-executeConfirmation border-round-10px margin-top-20px background-grey padding-20px">
                                            <p class="batchEdit-executeInfo"></p>
                                            <p class="font-bold margin-right-20px inline-block">Haluatko suorittaa tämän?</p>
                                            <button id="batchEdit-executeConfirmation" type="button" class="btn btn-danger">OK</button>
                                            <button id="batchEdit-executeCancel" type="button" class="btn btn-default">Peruuta</button>
                                        </div>
								    </td>
                                </tr>
                            </tr>
                        </table>
                    </div>