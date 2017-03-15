                    <div class="background-black padding-20px border-round-10px border-grey">
                        <h4 class="font-white">Sarja muokkaus</h4>
                        <p class="font-white">Useamman kohteen muokkaus kerralla (elä käytä ellet tiedä mitä teet)</p>
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
								    <select class="table_selection">
                                        <option value="tarjoukset">Tarjoukset</option>
                                        <option value="tilaukset">Tilaukset</option>
                                        <option value="lisatarviketarjoukset">Lisätarviketarjoukset</option>
                                        <option value="osoitteisto">Osoitteisto</option>
                                    </select>
							    </td>
                                <td>
								    <select class="first_column_selection">
                                        <option value="id" class="tarjoukset tilaukset lisatarviketarjoukset">ID</option>
                                        <option value="pvm" class="tarjoukset tilaukset lisatarviketarjoukset">Pvm</option>
                                        <option value="tiili" class="tarjoukset tilaukset lisatarviketarjoukset" selected>Tiili</option>
                                        <option value="vari" class="tarjoukset tilaukset lisatarviketarjoukset">Väri</option>
                                        <option value="kattoturva" class="tarjoukset tilaukset">Kattoturva</option>
                                        <option value="sadevesi" class="tarjoukset tilaukset">Sadevesi</option>
                                        <option value="lapivienti" class="tarjoukset tilaukset">Läpivienti</option>
                                        <option value="muoto" class="tarjoukset tilaukset">Katon muoto</option>
                                        <option value="kaltevuus" class="tarjoukset tilaukset">Katon kaltevuus</option>
                                        <option value="paaty" class="tarjoukset tilaukset">Päätymateriaali</option>
                                        <option value="toimitustapa" class="tarjoukset tilaukset">Toimitustapa</option>
                                        <option value="asiakasryhma" class="tarjoukset tilaukset">Asiakasryhmä</option>
                                        <option value="asiakasnumero" class="tarjoukset tilaukset">Asiakasnumero</option>
                                        <option value="asiakasnimi" class="tarjoukset tilaukset">Asiakasnimi</option>
                                        <option value="viite" class="tarjoukset tilaukset">Viite</option>
                                        <option value="talotehdas" class="lisatarviketarjoukset">Talotehdas</option>
                                        <option value="ostotilausnro" class="lisatarviketarjoukset">Ostotilausnumero</option>
                                        <option value="nimi" class="tarjoukset tilaukset lisatarviketarjoukset">Nimi</option>
                                        <option value="puh" class="tarjoukset tilaukset lisatarviketarjoukset">Puhelin</option>
                                        <option value="email" class="lisatarviketarjoukset">Email</option>
                                        <option value="kontaktihenkilo" class="lisatarviketarjoukset">Yhteyshenkiö</option>
                                        <option value="katunimi" class="tarjoukset tilaukset lisatarviketarjoukset">Katunimi</option>
                                        <option value="katunumero" class="tarjoukset tilaukset lisatarviketarjoukset">Katunumero</option>
                                        <option value="postinumero" class="tarjoukset tilaukset lisatarviketarjoukset osoitteisto">Postinumero</option>
                                        <option value="kaupunki" class="tarjoukset tilaukset lisatarviketarjoukset osoitteisto">Kunta</option>
                                        <option value="tekija" class="tarjoukset tilaukset">Tekijä</option>
                                        <option value="paivienkesto" class="tarjoukset tilaukset">Päivien kesto</option>
                                        <option value="laskennankesto" class="tarjoukset tilaukset">Laskennankesto</option>
                                        <option value="asiakkaanvastuulla" class="tarjoukset">Määrät as. vastuulla</option>
                                        <option value="hinta" class="lisatarviketarjoukset">Hinta</option>
                                        <option value="toimituspvm" class="lisatarviketarjoukset">Toimitus Pvm</option>
                                        <option value="emailtunnus" class="tarjoukset tilaukset lisatarviketarjoukset">Email tunnus</option>
                                    </select>
							    </td>
                                <td>
								    <select class="logic_selection">
                                        <option value="is">ON</option>
                                        <option value="not">EI OLE</option>
                                        <option value="include">SISÄLTÄÄ</option>
                                        <option value="null">ON TYHJÄ</option>
                                    </select>
							    </td>
                                <td>
								    <input class="first_input" type="text"></input>
							    </td>
                                <td>
								    <select class="second_column_selection">
                                        <option value="id" class="tarjoukset tilaukset lisatarviketarjoukset">ID</option>
                                        <option value="pvm" class="tarjoukset tilaukset lisatarviketarjoukset">Pvm</option>
                                        <option value="tiili" class="tarjoukset tilaukset lisatarviketarjoukset" selected>Tiili</option>
                                        <option value="vari" class="tarjoukset tilaukset lisatarviketarjoukset">Väri</option>
                                        <option value="kattoturva" class="tarjoukset tilaukset">Kattoturva</option>
                                        <option value="sadevesi" class="tarjoukset tilaukset">Sadevesi</option>
                                        <option value="lapivienti" class="tarjoukset tilaukset">Läpivienti</option>
                                        <option value="muoto" class="tarjoukset tilaukset">Katon muoto</option>
                                        <option value="kaltevuus" class="tarjoukset tilaukset">Katon kaltevuus</option>
                                        <option value="paaty" class="tarjoukset tilaukset">Päätymateriaali</option>
                                        <option value="toimitustapa" class="tarjoukset tilaukset">Toimitustapa</option>
                                        <option value="asiakasryhma" class="tarjoukset tilaukset">Asiakasryhmä</option>
                                        <option value="asiakasnumero" class="tarjoukset tilaukset">Asiakasnumero</option>
                                        <option value="asiakasnimi" class="tarjoukset tilaukset">Asiakasnimi</option>
                                        <option value="viite" class="tarjoukset tilaukset">Viite</option>
                                        <option value="talotehdas" class="lisatarviketarjoukset">Talotehdas</option>
                                        <option value="ostotilausnro" class="lisatarviketarjoukset">Ostotilausnumero</option>
                                        <option value="nimi" class="tarjoukset tilaukset lisatarviketarjoukset">Nimi</option>
                                        <option value="puh" class="tarjoukset tilaukset lisatarviketarjoukset">Puhelin</option>
                                        <option value="email" class="lisatarviketarjoukset">Email</option>
                                        <option value="kontaktihenkilo" class="lisatarviketarjoukset">Yhteyshenkiö</option>
                                        <option value="katunimi" class="tarjoukset tilaukset lisatarviketarjoukset">Katunimi</option>
                                        <option value="katunumero" class="tarjoukset tilaukset lisatarviketarjoukset">Katunumero</option>
                                        <option value="postinumero" class="tarjoukset tilaukset lisatarviketarjoukset osoitteisto">Postinumero</option>
                                        <option value="kaupunki" class="tarjoukset tilaukset lisatarviketarjoukset osoitteisto">Kunta</option>
                                        <option value="tekija" class="tarjoukset tilaukset">Tekijä</option>
                                        <option value="paivienkesto" class="tarjoukset tilaukset">Päivien kesto</option>
                                        <option value="laskennankesto" class="tarjoukset tilaukset">Laskennankesto</option>
                                        <option value="asiakkaanvastuulla" class="tarjoukset">Määrät as. vastuulla</option>
                                        <option value="hinta" class="lisatarviketarjoukset">Hinta</option>
                                        <option value="toimituspvm" class="lisatarviketarjoukset">Toimitus Pvm</option>
                                        <option value="emailtunnus" class="tarjoukset tilaukset lisatarviketarjoukset">Email tunnus</option>
                                    </select>
							    </td>
                                <td>
								    <input class="second_input" type="text"></input>
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