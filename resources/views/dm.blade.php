<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Andrissar</title>
        <script src="{{ asset('js/dm.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body>
        <header id="header-dm" style="width: {{ count($characters) * 735 }}px;">
            <nav>
                <a id="brand" href="{{ route('home') }}">Andrissar</a>

                @auth
                    <form id="logout" action="{{ route('logout') }}" method="post">
                        @csrf

                        <span>{{ auth()->user()->name }}</span>

                        <button type="submit">Logout</button>
                    </form>
                @else
                    <span id="guest">Guest</span>
                @endauth
            </nav>
        </header>

        <main id="app">
            <div id="dm" style="width: {{ count($characters) * 735 }}px;">
                @foreach($characters as $cid => $character)
                    <div class="character" rel="{{ $cid }}">
                        <div class="page--1 on" rel="1">
                            <div class="character_name">
                                {{ $character->character_name }}
                            </div>

                            <div class="details">
                                <div class="top class_and_level">
                                    {{ $character->class_and_level }}
                                </div>

                                <div class="top background">
                                    {{ $character->background }}
                                </div>

                                <div class="top player_name">
                                    {{ $character->user->name }}
                                </div>

                                <div class="bottom race">
                                    {{ $character->race }}
                                </div>

                                <div class="bottom alignment">
                                    {{ $character->alignment }}
                                </div>

                                <div class="bottom experience_points">
                                    {{ $character->experience_points }}
                                </div>
                            </div>

                            <div class="abilities">
                                <div class="ability strength">
                                    <div class="score">
                                        {{ $character->strength['score'] }}
                                    </div>

                                    <div class="bonus">
                                        {{ $character->strength['bonus'] }}
                                    </div>
                                </div>

                                <div class="ability dexterity">
                                    <div class="score">
                                        {{ $character->dexterity['score'] }}
                                    </div>

                                    <div class="bonus">
                                        {{ $character->dexterity['bonus'] }}
                                    </div>
                                </div>

                                <div class="ability constitution">
                                    <div class="score">
                                        {{ $character->constitution['score'] }}
                                    </div>

                                    <div class="bonus">
                                        {{ $character->constitution['bonus'] }}
                                    </div>
                                </div>

                                <div class="ability intelligence">
                                    <div class="score">
                                        {{ $character->intelligence['score'] }}
                                    </div>

                                    <div class="bonus">
                                        {{ $character->intelligence['bonus'] }}
                                    </div>
                                </div>

                                <div class="ability wisdom">
                                    <div class="score">
                                        {{ $character->wisdom['score'] }}
                                    </div>

                                    <div class="bonus">
                                        {{ $character->wisdom['bonus'] }}
                                    </div>
                                </div>

                                <div class="ability charisma">
                                    <div class="score">
                                        {{ $character->charisma['score'] }}
                                    </div>

                                    <div class="bonus">
                                        {{ $character->charisma['bonus'] }}
                                    </div>
                                </div>
                            </div>

                            <div class="throws skills">
                                <div class="skill acrobatics">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->acrobatics['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->acrobatics['score'] }}
                                    </div>
                                </div>

                                <div class="skill animal_handling">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->animal_handling['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->animal_handling['score'] }}
                                    </div>
                                </div>

                                <div class="skill arcana">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->arcana['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->arcana['score'] }}
                                    </div>
                                </div>

                                <div class="skill athletics">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->athletics['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->athletics['score'] }}
                                    </div>
                                </div>

                                <div class="skill deception">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->deception['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->deception['score'] }}
                                    </div>
                                </div>

                                <div class="skill history">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->history['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->history['score'] }}
                                    </div>
                                </div>

                                <div class="skill insight">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->insight['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->insight['score'] }}
                                    </div>
                                </div>

                                <div class="skill intimidation">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->intimidation['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->intimidation['score'] }}
                                    </div>
                                </div>

                                <div class="skill investigation">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->investigation['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->investigation['score'] }}
                                    </div>
                                </div>

                                <div class="skill medicine">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->medicine['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->medicine['score'] }}
                                    </div>
                                </div>

                                <div class="skill nature">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->nature['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->nature['score'] }}
                                    </div>
                                </div>

                                <div class="skill perception">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->perception['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->perception['score'] }}
                                    </div>
                                </div>

                                <div class="skill performance">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->performance['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->performance['score'] }}
                                    </div>
                                </div>

                                <div class="skill persuasion">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->persuasion['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->persuasion['score'] }}
                                    </div>
                                </div>

                                <div class="skill religion">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->religion['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->religion['score'] }}
                                    </div>
                                </div>

                                <div class="skill sleight_of_hand">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->sleight_of_hand['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->sleight_of_hand['score'] }}
                                    </div>
                                </div>

                                <div class="skill stealth">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->stealth['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->stealth['score'] }}
                                    </div>
                                </div>

                                <div class="skill survival">
                                    <div class="class_skill">
                                        <span class="checkbox {{ $character->survival['class_skill'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="score">
                                        {{ $character->survival['score'] }}
                                    </div>
                                </div>
                            </div>

                            <div class="throws saves">
                                <div class="save strength">
                                    <div class="class_save">
                                        <span class="checkbox {{ $character->strength['class_save'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="saving_throw">
                                        {{ $character->strength['saving_throw'] }}
                                    </div>
                                </div>

                                <div class="save dexterity">
                                    <div class="class_save">
                                        <span class="checkbox {{ $character->dexterity['class_save'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="saving_throw">
                                        {{ $character->dexterity['saving_throw'] }}
                                    </div>
                                </div>

                                <div class="save constitution">
                                    <div class="class_save">
                                        <span class="checkbox {{ $character->constitution['class_save'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="saving_throw">
                                        {{ $character->constitution['saving_throw'] }}
                                    </div>
                                </div>

                                <div class="save intelligence">
                                    <div class="class_save">
                                        <span class="checkbox {{ $character->intelligence['class_save'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="saving_throw">
                                        {{ $character->intelligence['saving_throw'] }}
                                    </div>
                                </div>

                                <div class="save wisdom">
                                    <div class="class_save">
                                        <span class="checkbox {{ $character->wisdom['class_save'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="saving_throw">
                                        {{ $character->wisdom['saving_throw'] }}
                                    </div>
                                </div>

                                <div class="save charisma">
                                    <div class="class_save">
                                        <span class="checkbox {{ $character->charisma['class_save'] ? 'checked' : '' }}"></span>
                                    </div>

                                    <div class="saving_throw">
                                        {{ $character->charisma['saving_throw'] }}
                                    </div>
                                </div>
                            </div>

                            <div class="passive inspiration">
                                {{ $character->inspiration }}
                            </div>

                            <div class="passive proficiency_bonus">
                                {{ $character->proficiency_bonus }}
                            </div>

                            <div class="passive passive_wisdom">
                                {{ $character->passive_wisdom }}
                            </div>

                            <div class="armor_class">
                                {{ $character->armor_class }}
                            </div>

                            <div class="health_defense initiative">
                                {{ $character->initiative }}
                            </div>

                            <div class="health_defense speed">
                                {{ $character->speed }}
                            </div>

                            <div class="hp_line hit_point_maximum">
                                {{ $character->hit_point_maximum }}
                            </div>

                            <div class="pre hit_points current_hit_points">{{ $character->current_hit_points }}</div>

                            <div class="pre hit_points temporary_hit_points">{{ $character->temporary_hit_points }}</div>

                            <div class="hp_line total_hit_dice">
                                {{ $character->total_hit_dice }}
                            </div>

                            <div class="pre hit_dice">{{ $character->hit_dice }}</div>

                            <div class="death_saves">
                                @foreach($character->death_saves['successes'] as $save)
                                    <div class="success">
                                        <span class="checkbox {{ $character->death_saves['successes'][$loop->index] ? 'checked' : '' }}"></span>
                                    </div>
                                @endforeach

                                @foreach($character->death_saves['failures'] as $save)
                                    <div class="failure">
                                        <span class="checkbox {{ $character->death_saves['failures'][$loop->index] ? 'checked' : '' }}"></span>
                                    </div>
                                @endforeach
                            </div>

                            <div class="weapons">
                                @foreach($character->weapons as $weapon)
                                    <div class="weapon">
                                        <div class="name">
                                            {{ $character->weapons[$loop->index]['name'] }}
                                        </div>

                                        <div class="atk_bonus">
                                            {{ $character->weapons[$loop->index]['atk_bonus'] }}
                                        </div>

                                        <div class="damage_and_type">
                                            {{ $character->weapons[$loop->index]['damage_and_type'] }}
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="pre text_attacks_spellcasting">{{ $character->attacks_and_spellcasting }}</div>

                            <div class="money_coins">
                                <div class="money">
                                    {{ $character->cp }}
                                </div>

                                <div class="money">
                                    {{ $character->sp }}
                                </div>

                                <div class="money">
                                    {{ $character->ep }}
                                </div>

                                <div class="money">
                                    {{ $character->gp }}
                                </div>

                                <div class="money">
                                    {{ $character->pp }}
                                </div>
                            </div>

                            <div class="pre text_equipment">{{ $character->equipment }}</div>

                            <div class="story">
                                <div class="pre personality_traits">{{ $character->personality_traits }}</div>

                                <div class="pre ideals">{{ $character->ideals }}</div>

                                <div class="pre bonds">{{ $character->bonds }}</div>

                                <div class="pre flaws">{{ $character->flaws }}</div>
                            </div>

                            <div class="pre text_languages">{{ $character->other_proficiencies_and_languages }}</div>

                            <div class="pre text_traits">{{ $character->features_and_traits }}</div>
                        </div>

                        <div class="page--2" rel="2">
                            <div class="character_name_2">
                                {{ $character->character_name }}
                            </div>

                            <div class="stats">
                                <div class="top age">
                                    {{ $character->age }}
                                </div>

                                <div class="top height">
                                    {{ $character->height }}
                                </div>

                                <div class="top weight">
                                    {{ $character->weight }}
                                </div>

                                <div class="bottom eyes">
                                    {{ $character->eyes }}
                                </div>

                                <div class="bottom skin">
                                    {{ $character->skin }}
                                </div>

                                <div class="bottom hair">
                                    {{ $character->hair }}
                                </div>
                            </div>

                            <figure class="character_appearance">
                                <img alt="character image" src="{{ asset('storage/' . ($character->character_appearance ?? 'warrior.jpg')) }}">
                                <figcaption>character image</figcaption>
                            </figure>

                            <div class="pre allies_and_organizations">{{ $character->allies_and_organizations }}</div>

                            <div class="faction_name">
                                {{ $character->faction_name }}
                            </div>

                            <figure class="faction_symbol">
                                <img alt="faction symbol image" src="{{ asset('storage/' . ($character->faction_symbol ?? 'no-faction.jpg')) }}">
                                <figcaption>faction symbol image</figcaption>
                            </figure>

                            <div class="pre character_backstory">{{ $character->character_backstory }}</div>

                            <div class="pre additional_features_and_traits">{{ $character->additional_features_and_traits }}</div>

                            <div class="pre treasure">{{ $character->treasure }}</div>
                        </div>

                        <div class="page--3" rel="3">
                            <div class="spellcasting_class">
                                {{ $character->spellcasting_class }}
                            </div>

                            <div class="spell_stats">
                                <div class="spell_stat spellcasting_ability">
                                    {{ $character->spellcasting_ability }}
                                </div>

                                <div class="spell_stat spell_save_dc">
                                    {{ $character->spell_save_dc }}
                                </div>

                                <div class="spell_stat spell_attack_bonus">
                                    {{ $character->spell_attack_bonus }}
                                </div>
                            </div>

                            <div class="spells">
                                <div class="spell_column spell_column_1">
                                    @for($i = 0; $i < 3; $i++)
                                        <div class="spell_level spell_level_{{ $i }}">
                                            @if($i > 0)
                                                <div class="spell_slots_total">
                                                    {{ $character->spells[$i]['slots_total'] }}
                                                </div>

                                                <div class="spell_slots_expended">
                                                    {{ $character->spells[$i]['slots_expended'] }}
                                                </div>
                                            @endif

                                            <div class="spell_list">
                                                @foreach($character->spells[$i]['list'] as $n => $spell)
                                                    <div class="spell">
                                                        @if($i > 0)
                                                            <div class="spell_prepared">
                                                                <span class="checkbox  {{ $character->spells[$i]['list'][$n]['prepared'] ? 'checked' : '' }}"></span>
                                                            </div>
                                                        @endif

                                                        <div class="spell_name">
                                                            {{ $character->spells[$i]['list'][$n]['spell'] }}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endfor
                                </div>

                                <div class="spell_column spell_column_2">
                                    @for($i = 3; $i < 6; $i++)
                                        <div class="spell_level spell_level_{{ $i }}">
                                            <div class="spell_slots_total">
                                                {{ $character->spells[$i]['slots_total'] }}
                                            </div>

                                            <div class="spell_slots_expended">
                                                {{ $character->spells[$i]['slots_expended'] }}
                                            </div>

                                            <div class="spell_list">
                                                @foreach($character->spells[$i]['list'] as $n => $spell)
                                                    <div class="spell">
                                                        <div class="spell_prepared">
                                                            <span class="checkbox  {{ $character->spells[$i]['list'][$n]['prepared'] ? 'checked' : '' }}"></span>
                                                        </div>

                                                        <div class="spell_name">
                                                            {{ $character->spells[$i]['list'][$n]['spell'] }}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endfor
                                </div>

                                <div class="spell_column spell_column_3">
                                    @for($i = 6; $i < 10; $i++)
                                        <div class="spell_level spell_level_{{ $i }}">
                                            <div class="spell_slots_total">
                                                {{ $character->spells[$i]['slots_total'] }}
                                            </div>

                                            <div class="spell_slots_expended">
                                                {{ $character->spells[$i]['slots_expended'] }}
                                            </div>

                                            <div class="spell_list">
                                                @foreach($character->spells[$i]['list'] as $n => $spell)
                                                    <div class="spell">
                                                        <div class="spell_prepared">
                                                            <span class="checkbox  {{ $character->spells[$i]['list'][$n]['prepared'] ? 'checked' : '' }}"></span>
                                                        </div>

                                                        <div class="spell_name">
                                                            {{ $character->spells[$i]['list'][$n]['spell'] }}
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </main>
    </body>
</html>
