@extends('Connection_layouts.layout')

@section('index')
<div class="index-page">
    <div class="subtit">요금 안내</div>
    <div class="explanation">
        <table style="width:100%">
            <colgroup>
                <col style="*">
                <col style="width:25%">
                <col style="width:25%">
                <col style="width:25%">
            </colgroup>
            <tbody>
                <tr>
                    <th>3년 약정</th>
                    <th>2년 약정</th>
                    <th>1년 약정</th>
                    <th>무약정</th>
                  </tr>
                      <tr>
                          <td>33,000 원</td>
                          <td>41,580 원</td>
                          <td>49,500 원</td>
                          <td>56,100 원</td>
                      </tr>
                  </table>
            </tbody>
        </table>
    </div>
    <div style="margin-top:10px; color:#666; text-align:left; line-height:24px;">
        - 부가세 포함 금액<br />
            - 100Mbps 보다 5배 빠른 최대 500Mbps의 인터넷 속도를 확인하세요.
      </div>
          
      <div class="subtit">
        참 쉬운 가족 결합(유무선/무선간 결합)
      </div>  
        <div class="explanation" style="display:block; margin-top:10px;">
            <table width="100%">
              <colgroup>
              <col style="width: *">
              <col style="width: 12%;">
              <col style="width: 12%;">
              <col style="width: 12%;">
              <col style="width: 15%;">
              <col style="width: 12%;">
              <col style="width: 12%;">
              <col style="width: 12%;">
              </colgroup>
              <thead>
                <tr>
                  <th rowspan="2">결합한 <br>
                    휴대폰 수</th>
                  <th colspan="3">휴대폰 요금 할인 금액</th>
                  <th rowspan="2">가족사랑데이터</th>
                  <th colspan="3">인터넷 요금 할인금액<br>
                    *3년 약정 기준</th>
                </tr>
                <tr>
                  <th>월정액이 69,000원 미만인 요금제</th>
                  <th>월정액이 69,000원 이상인 요금제</th>
                  <th>월정액이 88,000원 이상인 요금제</th>
                  <th>최대 100Mbps<br>속도 인터넷</th>
                  <th>최대 500Mbps<br>속도 인터넷</th>
                  <th>최대 1Gbps<br>속도 인터넷</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th>1개</th>
                  <td>-</td>
                  <td>-</td>
                  <td>-</td>
                  <td rowspan="4">결합한<br>
                    휴대폰 수<br>
                    X 1,000MB</td>
                  <td rowspan="4">5,500원</td>
                  <td rowspan="4">9,900원</td>
                  <td rowspan="4">13,200원</td>
                </tr>
                <tr>
                  <th>2개</th>
                  <td>2,200원</td>
                  <td>3,300원</td>
                  <td>4,400원</td>
                </tr>
                <tr>
                  <th>3개</th>
                  <td>3,300원</td>
                  <td>5,500원</td>
                  <td>6,600원</td>
                </tr>
                <tr>
                  <th>4개~10개</th>
                  <td>4,400원</td>
                  <td>6,600원</td>
                  <td>8,800원</td>
                </tr>
              </tbody>
            </table>
        </div>
        <div style="margin-top:10px; color:#666; text-align:left; line-height:24px;">
            - 부가세 포함 금액
        </div>
      <ul style="padding-left:20px;">
         <li style="list-style:disc;">위의 인터넷 요금 할인 금액은 3년 약정으로 가입한 인터넷을 기준으로 하며, 약정기간이 2년인 경우 3년 약정 할인금액의 50%, 1년 약정인 경우 25%를 적용합니다.</li>
         <li style="list-style:disc;">휴대폰 요금할인은 약정할인 적용 후 월정액 금액을 기준으로 적용합니다.</li>
         <li style="list-style:disc;">최대 2.5Gbps, 5Gbps, 10Gbps 속도 인터넷은 최대 1Gbps 속도 인터넷과 동일한 할인금액을 적용받습니다.</li>
        </ul>
    
      <div class="subtit">
        할인 혜택 예시(휴대폰과 인터넷을 결합한 경우)
      </div>  
      <div class="explanation" style="display:block; margin-top:10px;">
        <table width="100%">
          <colgroup>
          <col style="width: *">
          <col style="width: 13%;">
          <col style="width: 15%;">
          <col style="width: 15%;">
          <col style="width: 15%;">
          <col style="width: 12%;">
          <col style="width: 12%;">
          </colgroup>
          <thead>
            <tr>
              <th rowspan="2">인터넷 할인금액</th>
              <th colspan="4">휴대폰 요금제 별 할인금액</th>
              <th rowspan="2">총 할인금액</th>
              <th rowspan="2">가족사랑<br>
                데이터</th>
            </tr>
            <tr>
              <th>결합<br>
                휴대폰 수</th>
              <th>월정액 69,000원 미만 요금제</th>
              <th>월정액 69,000원 이상 요금제</th>
              <th>월정액 88,000원 이상 요금제</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td rowspan="3"><span style="background-image: url(/design/inter01/images/phone-icon2.png) !important; width: 83px; height: 49px; background-repeat: no-repeat; display: inline-block;"></span><br>
                9,900원<br>
                (최대 500Mbps)</td>
              <td><span style="background-image: url(/design/inter01/images/phone-icon.png) !important; width: 55px; height: 35px; background-repeat: no-repeat; display: inline-block;"></span></td>
              <td>-</td>
              <td>-</td>
              <td>-</td>
              <td><b style="color: #ed008c;">9,900원</b></td>
              <td><b style="color: #ed008c;">1,000MB</b></td>
            </tr>
            <tr>
              <td><span style="background-image: url(/design/inter01/images/phone-icon.png) !important; width: 55px; height: 35px; background-repeat: no-repeat; display: inline-block; background-position: -54px;"></span></td>
              <td>2,200원</td>
              <td>3,300원</td>
              <td>4,400원</td>
              <td>최대<br>
                <b style="color: #ed008c;">18,700원</b></td>
              <td><b style="color: #ed008c;">2,000MB</b></td>
            </tr>
            <tr>
              <td><span style="background-image: url(/design/inter01/images/phone-icon.png) !important; width: 55px; height: 35px; background-repeat: no-repeat; display: inline-block; background-position: -108px;"></span></td>
              <td>3,300원</td>
              <td>5,500원</td>
              <td>6,600원</td>
              <td>최대<br>
                <b style="color: #ed008c;">29,700원</b></td>
              <td><b style="color: #ed008c;">3,000MB</b></td>
            </tr>
            <tr>
              <td><span style="background-image: url(/design/inter01/images/phone-icon2.png) !important; width: 83px; height: 49px; background-repeat: no-repeat; display: inline-block; background-position: -82px;"></span><br>
                19,800원<br>
                (최대 500Mbps)</td>
              <td><span style="background-image: url(/design/inter01/images/phone-icon.png) !important; width: 55px; height: 35px; background-repeat: no-repeat; display: inline-block; background-position: -108px;"></span></td>
              <td>3,300원</td>
              <td>5,500원</td>
              <td>6,600 원</td>
              <td>최대<br>
                <b style="color: #ed008c;">39,600원</b></td>
              <td><b style="color: #ed008c;">3,000MB</b></td>
            </tr>
          </tbody>
        </table>
        </div>
            
        <div class="subtit" style="float:left; width:100%;">
          설치비 안내
        </div>  
        <div class="explanation" style="display:block; margin-top:10px;">
            <table width="100%">
              <tbody>
              <tr>
                <th width="*">설치비</th>
                <th width="50%">동일장소/동일일자에 U<sup>+</sup>tv와 동시 설치 시</th>
              </tr>
              <tr>
                <td>27,500 원</td>
                <td>25,300 원</td>
              </tr>
              </tbody>
          </table> 
        </div>
      <div style="margin-top:10px; color:#666; text-align:left; line-height:24px;">
        - 부가세 포함 금액<br />
            - 신규설치/이전/서비스변경 시 전부 동일
      </div>
      
      <div class="subtit">
          유의사항
      </div>
      <ul style="padding-left:20px; padding-bottom:40px;">
        <li style="list-style:disc;">기가인터넷의 실제 속도는 PC 성능, 하드디스크 드라이브(HDD) 속도, 인터넷 구내 네트워크, 서버 지연 등에 따라 달라질 수 있습니다.<br />
       (설치지역, 주거 및 네트워크 구성 유형 등 에 따라 개통 가능 지역이더라도 설치가 불가능 하거나 선택할 수 있는 요금제가 달라질 수 있습니다.)</li>
        <li style="list-style:disc;">PC 랜카드, 노트북 네트워크 카드 등이 기가 속도를 지원하면 정상적인 속도로 서비스를 제공받을 수 있으므로 기가인터넷 개통 전에 필수로 기가 속도를 지원하는 랜카드를 설치하시기 바랍니다. <br />
        (랜카드 : 랜카드는 컴퓨터가 네트워크 연결과 데이터 전송을 할 수 있게 하는 컴퓨터의 통신장치입니다.)</li>
        <li style="list-style:disc;">데이터 사용량은 무제한이나 인터넷 이용자는 1일 100GB, IPTV를 함께 이용하면 1일 120GB 초과 시에 100Mbps 속도로 제공합니다.</li>
        <li style="list-style:disc;">이용 중에 해지할 경우에는 사용 기간에 따라 이용료와 기기 할인요금을 반환해야 합니다.</li>
        <li style="list-style:disc;">기존 100Mbps 인터넷 사용자가 기가인터넷 Slim 또는 기가인터넷으로 변경하면 기존의 약정을 이어받거나 변경할 수 있습니다. 약정을 변경할 때 최초 계약에서 정한 할인 반환은 최초 계약 만료 시점까지 보류합니다. 이때 서비스 변경으로 인한 개통 설치비 및 기타 장비 임대료가 발생할 수 있습니다.</li>
        <li style="list-style:disc;">요금을 미납하거나 서비스를 일시적으로 정지하면 결합 할인이 중지됩니다.</li>
      </ul>
</div>

@stop
