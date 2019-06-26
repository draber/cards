@extends('modules::Common.views.layout')

@section('title', 'Card Listing')

@section('content')
    @foreach($payload as $i => $entry)
        <section class="card-container color-{{$i}}">
            <div class="recto decorated-container">
                <div class="antlitz-outer">
                    <img class="antlitz" src="{{$entry->img}}" alt=""/>
                </div>
                <div class="frame">
                    <img src="img/frame.png">
                    <h2>{{$entry->name}}</h2>
                </div>
            </div>
            <div class="verso decorated-container">
                <div class="frame">
                    <img src="img/frame.png">
                </div>
                <div class="card-properties-outer">
                    <table class="card-properties">
                        <colgroup>
                            <col width="25%">
                            <col width="25%">
                            <col width="25%">
                            <col width="25%">
                        </colgroup>
                        <thead>
                        <tr>
                            <th colspan="4">{{$entry->name}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>AC</td>
                            <td class="value">{{$entry->ac}}</td>
                            <td>HP</td>
                            <td class="value">{{$entry->hp}}</td>
                        </tr>
                        <tr>
                            <td>Attack</td>
                            <td colspan="3" class="value">{{$entry->attack_parameters}}</td>
                        </tr>
                        <tr>
                            <td>Saves</td>
                            <td colspan="3" class="value">+{{$entry->fort}} / +{{$entry->reflex}} / +{{$entry->will}}</td>
                        </tr>
                        <tr>
                            <td>Stats</td>
                            <td colspan="3" class="value">{{$entry->str}} / {{$entry->dex}} / {{$entry->con}}
                                / {{$entry->int}} / {{$entry->wis}} / {{$entry->cha}}</td>
                        </tr>
                        <tr class="pre-ultimate">
                            <td>Init</td>
                            <td class="value">+{{$entry->initiative_bonus}}</td>
                            <td>Speed</td>
                            <td class="value">{{$entry->speed}} feet</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="long-text">{{$entry->notes}}</td>
                        </tr>
                        <!--tr>
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
                        </tr-->
                        </tbody>
                    </table>
                    <div class="badge">{{$entry->cr}}</div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
