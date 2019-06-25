    @extends('modules::Common.views.layout')

    @section('title', 'Card Listing')

    @section('content')
        @for($i = 0; $i < 8; $i++)
            <section class="card-container color-{{$i}}">
                <div class="recto decorated-container">
                    <div class="frame" style="background-image: url(img/cards<?=($i+1)?>.jpg)">
                        <img src="img/frame.png">
                        <h2>Card Name</h2>
                    </div>
                </div>
                <div class="verso decorated-container">
                    <div class="frame">
                        <img src="img/frame.png">
                    </div>
                    <div class="card-properties-outer">
                        <table class="card-properties">
                            <thead>
                            <tr>
                                <th>Property</th>
                                <th>Value</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Strength</td>
                                <td>48</td>
                            </tr>
                            <tr>
                                <td>Anger</td>
                                <td>
                                    <div class="detail-trigger">
                                        <span class="detail-text">54</span>
                                        <div class="property-details decorated-container">
                                            <table>
                                                <tbody>
                                                <tr>
                                                    <td>Background Noise</td>
                                                    <td>43</td>
                                                </tr>
                                                <tr>
                                                    <td>Proper Hate</td>
                                                    <td>75</td>
                                                </tr>
                                                <tr>
                                                    <td>Furious Loathing</td>
                                                    <td>98</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Common Sense</td>
                                <td>34</td>
                            </tr>
                            <tr>
                                <td>IQ</td>
                                <td>what?</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        @endfor
    @endsection