Vue.component('character-component', {
  template: `    
    <section class="character" data-slug="{{character.slug}}">
        <div class="recto decorated-container">
            <img src="img/cards/{{character.image}}" alt="{{character.name}}"/>
            <div class="frame">
                <h2>{{character.name}}</h2>
            </div>
        </div>
        <div class="verso decorated-container">
            <table class="card-properties">
                <thead>
                    <tr>
                        <th>Attribute</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Strength</td>
                        <td>{{character.strength}}</td>
                    </tr>
                    <tr>
                        <td>Stamina</td>
                        <td>{{character.stamina}}</td>
                    </tr>
                    <tr>
                        <td>IQ</td>
                        <td>{{character.iq}}</td>
                    </tr>
                    <tr>
                        <td>Anger</td>
                        <td>
                            <div class="detail-trigger">  
                                <span class="detail-text">{{character.anger}}</span> 
                                <div class="property-details">                                     
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td>Background Noise</td>
                                                <td>{{character.backgroundNoise}}</td>
                                            </tr>
                                            <tr>
                                                <td>Proper Hate</td>
                                                <td>{{character.properHate}}</td>
                                            </tr>
                                            <tr>
                                                <td>Furious Loathing</td>
                                                <td>{{character.furiousLoathing}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
  `,
  props: {
    character: Object
  }
});