                  <?php
	Yii::app()->clientScript->registerScript('modering',<<<EOD
	
	$('.donate-block input[type="checkbox"]').change(function(){
		$('.donate input[type="submit"]').prop('disabled',!$(this).prop('checked'))
	});
	$('.donate-block  a.trigger, a.close').click(function(){
		$('.oferta').animate({opacity: 'toggle', height: ['toggle', 'swing']}, 'fast');;
	})

EOD
,CClientScript::POS_READY);
	?>
            <div id="block" class="donate-block">
              <h2>Ваша поддержка важна</h2>
              <p>Вы добиваетесь ремонта дорог по всей стране. Вы заставляете ГИБДД ремонтировать ямы во дворах, на шоссе и сельских дорогах.<br> Благодаря вам существует РосЯма.</p>
              <div class="donate">
                <!--<script type="text/javascript" src="https://auth.robokassa.ru/Merchant/PaymentForm/FormFLS.js"></script>-->
                <form id="fmain" method="post" action="http://auth.robokassa.ru:80/Merchant/Index.aspx" target="_top">
                  <div class="formFL shadows lifted">
                    <div>
                      <input type="text" name="FreeOutSum" value="500" maxlength="10">
                      <span class="cur">Руб.</span>
                      <input name="MrchLogin" type="hidden" value="fbk">
                      <input name="Desc" type="hidden" value="Пожертвование на проект РосЯма">
                      <input name="SignatureValue" type="hidden" value="f2f432d446e845b3098768440b796835">
                      <input name="IncCurrLabel" type="hidden" value="BANKOCEAN2R">
                      <input name="shp_Project" type="hidden" value="RosYama">
                      <input type="submit" value="Поддержать">
                    </div>					  
                      <img src="/images/money.png">

                  </div>
                </form>
              </div>
              <div class="accept">
                <div class="box">
                  <input type="checkbox" checked="checked" name="accept" id="donateAccept" />
                </div>
                <div class="text">
                  Я прочитал <a class="trigger">публичную оферту</a> о заключении договора пожертвования и согласен с её условиями.                   

                  
                </div>
              </div>
              <div class="oferta">
                  <a class="close"></a>
                  <div class="scroll">
                    <h3>Публичная оферта о заключении договора пожертвования </h3>
                    <p>
                       1. Значение настоящей публичной оферты
                    </p>
                    <p>
                       1.1 Настоящая публичная оферта («Оферта») является предложением НО "Фонд борьбы с коррупцией" (далее - «Фонд») заключить с любым гражданином Российской Федерации, который отзовется на Оферту (далее - «Жертвователь»), договор пожертвования (далее - «Договор»), на условиях, предусмотренных ниже.
                    </p>
                    <p>
                       1.2 Оферта адресована исключительно гражданам Российской Федерации.
                    </p>
                    <p>
                       1.3 Оферта является публичной офертой в соответствии с п. 2 ст. 437 Гражданского кодекса Российской Федерации.
                    </p>
                    <p>
                       1.4 Оферта вступает в силу со дня, следующего за днем ее размещения на сайте Фонда в сети Интернет по адресу http://fbk.info (далее - «Сайт»).
                    </p>
                    <p>
                       1.5 Оферта действует бессрочно. Фонд вправе отменить Оферту в любое время без объяснения причин. В Оферту могут быть внесены изменения и дополнения, которые вступают в силу со дня, следующего за днем их размещения на Сайте. Недействительность одного или нескольких условий Оферты не влечет недействительности всех остальных условий Оферты.
                    </p>
                    <p>
                       1.6 Местом размещения Оферты считается город Москва, Российская Федерация.
                    </p>
                    <p>
                       2. Существенные условия Договора
                    </p>
                    <p>
                       2.1 Сумма пожертвования: сумма пожертвования определяется Жертвователем.
                    </p>
                    <p>
                       2.2 Назначение пожертвования: ведение уставной деятельности и содержание Фонда либо реализация проекта «РосПил». Жертвователь по своему выбору определяет назначение пожертвования при перечислении денежных средств в пользу Фонда путем указания соответствующей информации в поле «назначение платежа». При отсутствии такого указания средства считаются поступившими на ведение уставной деятельности и содержание Фонда.
                    </p>
                    <p>
                       3. Порядок заключения Договора
                    </p>
                    <p>
                       3.1 Договор заключается путем акцепта Оферты Жертвователем.
                    </p>
                    <p>
                       3.2 Оферта может быть акцептована Жертвователем путем перечисления Жертвователем денежных средств в пользу Фонда по реквизитам, указанным в разделе 5 Оферты, с указанием в качестве назначения платежа: «пожертвование», «пожертвование на ведение уставной деятельности и содержание Фонда», «пожертвование на проект «РосПил» либо иного аналогичного указания.
                    </p>
                    <p>
                       3.3 Совершение Жертвователем действий, предусмотренных пунктом 3.2 Оферты, считается акцептом Оферты в соответствии с частью 3 статьи 438 Гражданского кодекса Российской Федерации.
                    </p>
                    <p>
                       3.4 Датой акцепта Оферты и, соответственно, датой заключения Договора является дата поступления денежных средств от Жертвователя на счет Фонда.
                    </p>
                    <p>
                       4. Прочие условия
                    </p>
                    <p>
                       4.1 Совершая действия, предусмотренные данной Офертой, Жертвователь подтверждает, что ознакомлен с условиями и текстом настоящей Оферты, целями деятельности Фонда, осознает значение своих действий, имеет полное право на их совершение и полностью принимает условия настоящей Оферты.
                    </p>
                    <p>
                       4.2 В соответствии с Федеральным законом №152-ФЗ «О персональных данных» Жертвователь настоящим дает свое согласие на обработку своих персональных данных любыми незапрещенными законом способами для целей исполнения настоящего Договора.
                    </p>
                    <p>
                       4.3 Жертвователь понимает, что в результате вступления в силу изменений к Федеральному закону «О некоммерческих организациях» в части регулирования деятельности некоммерческих организаций, выполняющих функции иностранного агента, в случае получения Фондом денежных средств от иностранных источников для Фонда могут наступить неблагоприятные последствия.
                    </p>
                    <p>
                       Настоящим Жертвователь подтверждает, что на момент акцепта Оферты он является гражданином Российской Федерации, действует от своего имени, за свой счет и в своем интересе.
                    </p>
                    <p>
                       В случае, если Фонду станет известно, что на момент акцепта Оферты Жертвователь не являлся гражданином Российской Федерации, либо действовал от имени, за счет или в интересах третьих лиц, Фонд имеет право в одностороннем внесудебном порядке отказаться от исполнения Договора и вернуть полученные денежные средства Жертвователю, а также потребовать возмещения причиненных Фонду убытков.
                    </p>
                    <p>
                       4.4 Настоящая Оферта регулируется и толкуется в соответствии с законодательством Российской Федерации.
                    </p>
                    <p>
                       5. Реквизиты Фонда
                    </p>
                    <table>
                      <tbody>
                        <tr>
                          <td>
                             Наименование:
                          </td>
                          <td>
                             Некоммерческая организация "Фонд борьбы с коррупцией"
                          </td>
                        </tr>
                        <tr>
                          <td>
                             Место нахождения:
                          </td>
                          <td>
                             Российская Федерация, 109240, г. Москва, ул. Николоямская, д.26, корп. 1-1А
                          </td>
                        </tr>
                        <tr>
                          <td>
                             ОГРН:
                          </td>
                          <td>
                             1117799018204
                          </td>
                        </tr>
                        <tr>
                          <td>
                             ИНН/КПП:
                          </td>
                          <td>
                             7709471429/770901001
                          </td>
                        </tr>
                      </tbody>
                    </table>

                    <h3>Банковские реквизиты </h3>

                    <table>
                      <tbody>
                        <tr>
                          <td>
                             Наименование банка:
                          </td>
                          <td>
                             ОАО "АЛЬФА-БАНК"
                          </td>
                        </tr>
                        <tr>
                          <td>
                             БИК:
                          </td>
                          <td>
                             044525593
                          </td>
                        </tr>
                        <tr>
                          <td>
                             Корр. счет:
                          </td>
                          <td>
                             30101810200000000593
                          </td>
                        </tr>
                        <tr>
                          <td>
                             Расчетный счет:
                          </td>
                          <td>
                             40703810402710000002
                          </td>
                        </tr>
                        <tr>
                          <td>
                             Расчетный счет (проект "РосПил"):
                          </td>
                          <td>
                             40703810702710000003
                          </td>
                        </tr>
                      </tbody>
                    </table>
                </div>
              </div>
            </div>
