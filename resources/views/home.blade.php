@extends('layouts.app')

@section('content')
    <input id="character_id" type="hidden" value="{{ $character->id }}">

    <form id="pages">
        <div class="character-sheet" id="page-1">
            <div class="character_name">
                <label for="character_name">Character Name</label>
                <input name="character_name" id="character_name" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->character_name }}">
            </div>

            <div id="details">
                <div class="top">
                    <label for="class_and_level">Class &amp; Level</label>
                    <input name="class_and_level" id="class_and_level" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->class_and_level }}">
                </div>

                <div class="top">
                    <label for="background">Background</label>
                    <input name="background" id="background" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->background }}">
                </div>

                <div class="top">
                    <label for="player_name">Player Name</label>
                    <input id="player_name" type="text" value="{{ auth()->user()->name }}" disabled>
                </div>

                <div class="bottom">
                    <label for="race">Race</label>
                    <input name="race" id="race" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->race }}">
                </div>

                <div class="bottom">
                    <label for="alignment">Alignment</label>
                    <input name="alignment" id="alignment" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->alignment }}">
                </div>

                <div class="bottom">
                    <label for="experience_points">Experience Points</label>
                    <input name="experience_points" id="experience_points" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->experience_points }}">
                </div>
            </div>

            <div class="abilities">
                <div id="strength">
                    <div class="score">
                        <label for="strength_score">Strength Score</label>
                        <input name="strength[score]" id="strength_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->strength['score'] }}">
                    </div>

                    <div class="bonus">
                        <label for="strength_bonus">Strength Bonus</label>
                        <input name="strength[bonus]" id="strength_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->strength['bonus'] }}">
                    </div>
                </div>

                <div id="dexterity">
                    <div class="score">
                        <label for="dexterity_score">Dexterity Score</label>
                        <input name="dexterity[score]" id="dexterity_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->dexterity['score'] }}">
                    </div>

                    <div class="bonus">
                        <label for="dexterity_bonus">Dexterity Bonus</label>
                        <input name="dexterity[bonus]" id="dexterity_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->dexterity['bonus'] }}">
                    </div>
                </div>

                <div id="constitution">
                    <div class="score">
                        <label for="constitution_score">Constitution Score</label>
                        <input name="constitution[score]" id="constitution_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->constitution['score'] }}">
                    </div>

                    <div class="bonus">
                        <label for="constitution_bonus">Constitution Bonus</label>
                        <input name="constitution[bonus]" id="constitution_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->constitution['bonus'] }}">
                    </div>
                </div>

                <div id="intelligence">
                    <div class="score">
                        <label for="intelligence_score">Intelligence Score</label>
                        <input name="intelligence[score]" id="intelligence_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->intelligence['score'] }}">
                    </div>

                    <div class="bonus">
                        <label for="intelligence_bonus">Intelligence Bonus</label>
                        <input name="intelligence[bonus]" id="intelligence_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->intelligence['bonus'] }}">
                    </div>
                </div>

                <div id="wisdom">
                    <div class="score">
                        <label for="wisdom_score">Wisdom Score</label>
                        <input name="wisdom[score]" id="wisdom_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->wisdom['score'] }}">
                    </div>

                    <div class="bonus">
                        <label for="wisdom_bonus">Wisdom Bonus</label>
                        <input name="wisdom[bonus]" id="wisdom_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->wisdom['bonus'] }}">
                    </div>
                </div>

                <div id="charisma">
                    <div class="score">
                        <label for="charisma_score">Charisma Score</label>
                        <input name="charisma[score]" id="charisma_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->charisma['score'] }}">
                    </div>

                    <div class="bonus">
                        <label for="charisma_bonus">Charisma Bonus</label>
                        <input name="charisma[bonus]" id="charisma_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->charisma['bonus'] }}">
                    </div>
                </div>
            </div>

            <div class="passive">
                <label for="inspiration">Inspiration</label>
                <input name="inspiration" id="inspiration" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->inspiration }}">
            </div>

            <div class="passive">
                <label for="proficiency_bonus">Proficiency Bonus</label>
                <input name="proficiency[bonus]" id="proficiency_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->proficiency_bonus }}">
            </div>

            <div id="throws">
                <div id="strength_save">
                    <div class="class_save">
                        <label for="strength_class_save">Strength Class Save?</label>
                        <input name="strength[class_save]" id="strength_class_save" type="checkbox" {{ $character->strength['class_save'] ? 'checked' : '' }}>
                    </div>

                    <div class="saving_throw">
                        <label for="strength_saving_throw">Strength Saving Throw</label>
                        <input name="strength[saving_throw]" id="strength_saving_throw" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->strength['saving_throw'] }}">
                    </div>
                </div>

                <div id="dexterity_save">
                    <div class="class_save">
                        <label for="dexterity_class_save">Dexterity Class Save?</label>
                        <input name="dexterity[class_save]" id="dexterity_class_save" type="checkbox" {{ $character->dexterity['class_save'] ? 'checked' : '' }}>
                    </div>

                    <div class="saving_throw">
                        <label for="dexterity_saving_throw">Dexterity Saving Throw</label>
                        <input name="dexterity[saving_throw]" id="dexterity_saving_throw" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->dexterity['saving_throw'] }}">
                    </div>
                </div>

                <div id="constitution_save">
                    <div class="class_save">
                        <label for="constitution_class_save">Constitution Class Save?</label>
                        <input name="constitution[class_save]" id="constitution_class_save" type="checkbox" {{ $character->constitution['class_save'] ? 'checked' : '' }}>
                    </div>

                    <div class="saving_throw">
                        <label for="constitution_saving_throw">Constitution Saving Throw</label>
                        <input name="constitution[saving_throw]" id="constitution_saving_throw" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->constitution['saving_throw'] }}">
                    </div>
                </div>

                <div id="intelligence_save">
                    <div class="class_save">
                        <label for="intelligence_class_save">Intelligence Class Save?</label>
                        <input name="intelligence[class_save]" id="intelligence_class_save" type="checkbox" {{ $character->intelligence['class_save'] ? 'checked' : '' }}>
                    </div>

                    <div class="saving_throw">
                        <label for="intelligence_saving_throw">Intelligence Saving Throw</label>
                        <input name="intelligence[saving_throw]" id="intelligence_saving_throw" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->intelligence['saving_throw'] }}">
                    </div>
                </div>

                <div id="wisdom_save">
                    <div class="class_save">
                        <label for="wisdom_class_save">Wisdom Class Save?</label>
                        <input name="wisdom[class_save]" id="wisdom_class_save" type="checkbox" {{ $character->wisdom['class_save'] ? 'checked' : '' }}>
                    </div>

                    <div class="saving_throw">
                        <label for="wisdom_saving_throw">Wisdom Saving Throw</label>
                        <input name="wisdom[saving_throw]" id="wisdom_saving_throw" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->wisdom['saving_throw'] }}">
                    </div>
                </div>

                <div id="charisma_save">
                    <div class="class_save">
                        <label for="charisma_class_save">Charisma Class Save?</label>
                        <input name="charisma[class_save]" id="charisma_class_save" type="checkbox" {{ $character->charisma['class_save'] ? 'checked' : '' }}>
                    </div>

                    <div class="saving_throw">
                        <label for="charisma_saving_throw">Charisma Saving Throw</label>
                        <input name="charisma[saving_throw]" id="charisma_saving_throw" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->charisma['saving_throw'] }}">
                    </div>
                </div>

                <div id="acrobatics">
                    <div class="class_skill">
                        <label for="acrobatics_class_skill">Acrobatics Class Skill?</label>
                        <input name="acrobatics[class_skill]" id="acrobatics_class_skill" type="checkbox" {{ $character->acrobatics['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="acrobatics_score">Acrobatics Score</label>
                        <input name="acrobatics[score]" id="acrobatics_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->acrobatics['score'] }}">
                    </div>
                </div>

                <div id="animal_handling">
                    <div class="class_skill">
                        <label for="animal_handling_class_skill">Animal Handling Class Skill?</label>
                        <input name="animal_handling[class_skill]" id="animal_handling_class_skill" type="checkbox" {{ $character->animal_handling['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="animal_handling_score">Animal Handling Score</label>
                        <input name="animal_handling[score]" id="animal_handling_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->animal_handling['score'] }}">
                    </div>
                </div>

                <div id="arcana">
                    <div class="class_skill">
                        <label for="arcana_class_skill">Arcana Class Skill?</label>
                        <input name="arcana[class_skill]" id="arcana_class_skill" type="checkbox" {{ $character->arcana['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="arcana_score">Arcana Score</label>
                        <input name="arcana[score]" id="arcana_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->arcana['score'] }}">
                    </div>
                </div>

                <div id="athletics">
                    <div class="class_skill">
                        <label for="athletics_class_skill">Athletics Class Skill?</label>
                        <input name="athletics[class_skill]" id="athletics_class_skill" type="checkbox" {{ $character->athletics['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="athletics_score">Athletics Score</label>
                        <input name="athletics[score]" id="athletics_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->athletics['score'] }}">
                    </div>
                </div>

                <div id="deception">
                    <div class="class_skill">
                        <label for="deception_class_skill">Deception Class Skill?</label>
                        <input name="deception[class_skill]" id="deception_class_skill" type="checkbox" {{ $character->deception['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="deception_score">Deception Score</label>
                        <input name="deception[score]" id="deception_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->deception['score'] }}">
                    </div>
                </div>

                <div id="history">
                    <div class="class_skill">
                        <label for="history_class_skill">History Class Skill?</label>
                        <input name="history[class_skill]" id="history_class_skill" type="checkbox" {{ $character->history['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="history_score">History Score</label>
                        <input name="history[score]" id="history_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->history['score'] }}">
                    </div>
                </div>

                <div id="insight">
                    <div class="class_skill">
                        <label for="insight_class_skill">Insight Class Skill?</label>
                        <input name="insight[class_skill]" id="insight_class_skill" type="checkbox" {{ $character->insight['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="insight_score">Insight Score</label>
                        <input name="insight[score]" id="insight_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->insight['score'] }}">
                    </div>
                </div>

                <div id="intimidation">
                    <div class="class_skill">
                        <label for="intimidation_class_skill">Intimidation Class Skill?</label>
                        <input name="intimidation[class_skill]" id="intimidation_class_skill" type="checkbox" {{ $character->intimidation['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="intimidation_score">Intimidation Score</label>
                        <input name="intimidation[score]" id="intimidation_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->intimidation['score'] }}">
                    </div>
                </div>

                <div id="investigation">
                    <div class="class_skill">
                        <label for="investigation_class_skill">Investigation Class Skill?</label>
                        <input name="investigation[class_skill]" id="investigation_class_skill" type="checkbox" {{ $character->investigation['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="investigation_score">Investigation Score</label>
                        <input name="investigation[score]" id="investigation_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->investigation['score'] }}">
                    </div>
                </div>

                <div id="medicine">
                    <div class="class_skill">
                        <label for="medicine_class_skill">Medicine Class Skill?</label>
                        <input name="medicine[class_skill]" id="medicine_class_skill" type="checkbox" {{ $character->medicine['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="medicine_score">Medicine Score</label>
                        <input name="medicine[score]" id="medicine_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->medicine['score'] }}">
                    </div>
                </div>

                <div id="nature">
                    <div class="class_skill">
                        <label for="nature_class_skill">Nature Class Skill?</label>
                        <input name="nature[class_skill]" id="nature_class_skill" type="checkbox" {{ $character->nature['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="nature_score">Nature Score</label>
                        <input name="nature[score]" id="nature_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->nature['score'] }}">
                    </div>
                </div>

                <div id="perception">
                    <div class="class_skill">
                        <label for="perception_class_skill">Perception Class Skill?</label>
                        <input name="perception[class_skill]" id="perception_class_skill" type="checkbox" {{ $character->perception['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="perception_score">Perception Score</label>
                        <input name="perception[score]" id="perception_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->perception['score'] }}">
                    </div>
                </div>

                <div id="performance">
                    <div class="class_skill">
                        <label for="performance_class_skill">Performance Class Skill?</label>
                        <input name="performance[class_skill]" id="performance_class_skill" type="checkbox" {{ $character->performance['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="performance_score">Performance Score</label>
                        <input name="performance[score]" id="performance_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->performance['score'] }}">
                    </div>
                </div>

                <div id="persuasion">
                    <div class="class_skill">
                        <label for="persuasion_class_skill">Persuasion Class Skill?</label>
                        <input name="persuasion[class_skill]" id="persuasion_class_skill" type="checkbox" {{ $character->persuasion['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="persuasion_score">Persuasion Score</label>
                        <input name="persuasion[score]" id="persuasion_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->persuasion['score'] }}">
                    </div>
                </div>

                <div id="religion">
                    <div class="class_skill">
                        <label for="religion_class_skill">Religion Class Skill?</label>
                        <input name="religion[class_skill]" id="religion_class_skill" type="checkbox" {{ $character->religion['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="religion_score">Religion Score</label>
                        <input name="religion[score]" id="religion_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->religion['score'] }}">
                    </div>
                </div>

                <div id="sleight_of_hand">
                    <div class="class_skill">
                        <label for="sleight_of_hand_class_skill">Sleight of Hand Class Skill?</label>
                        <input name="sleight_of_hand[class_skill]" id="sleight_of_hand_class_skill" type="checkbox" {{ $character->sleight_of_hand['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="sleight_of_hand_score">Sleight of Hand Score</label>
                        <input name="sleight_of_hand[score]" id="sleight_of_hand_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->sleight_of_hand['score'] }}">
                    </div>
                </div>

                <div id="stealth">
                    <div class="class_skill">
                        <label for="stealth_class_skill">Stealth Class Skill?</label>
                        <input name="stealth[class_skill]" id="stealth_class_skill" type="checkbox" {{ $character->stealth['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="stealth_score">Stealth Score</label>
                        <input name="stealth[score]" id="stealth_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->stealth['score'] }}">
                    </div>
                </div>

                <div id="survival">
                    <div class="class_skill">
                        <label for="survival_class_skill">Survival Class Skill?</label>
                        <input name="survival[class_skill]" id="survival_class_skill" type="checkbox" {{ $character->survival['class_skill'] ? 'checked' : '' }}>
                    </div>

                    <div class="score">
                        <label for="survival_score">Survival Score</label>
                        <input name="survival[score]" id="survival_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->survival['score'] }}">
                    </div>
                </div>
            </div>

            <div class="passive">
                <label for="passive_wisdom">Passive Wisdom (Perception)</label>
                <input name="passive_wisdom" id="passive_wisdom" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->passive_wisdom }}">
            </div>

            <div>
                <label for="other_proficiencies_and_languages">Other Proficiencies &amp; Languages</label>
                <textarea name="other_proficiencies_and_languages" id="other_proficiencies_and_languages">{{ $character->other_proficiencies_and_languages }}</textarea>
            </div>

            <div>
                <label for="armor_class">Armor Class</label>
                <input name="armor_class" id="armor_class" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->armor_class }}">
            </div>

            <div>
                <label for="initiative">Initiative</label>
                <input name="initiative" id="initiative" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->initiative }}">
            </div>

            <div>
                <label for="speed">Speed</label>
                <input name="speed" id="speed" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->speed }}">
            </div>

            <div>
                <label for="hit_point_maximum">Hit Point Maximum</label>
                <input name="hit_point_maximum" id="hit_point_maximum" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->hit_point_maximum }}">
            </div>

            <div>
                <label for="current_hit_points">Current Hit Points</label>
                <textarea name="current_hit_points" id="current_hit_points">{{ $character->current_hit_points }}</textarea>
            </div>

            <div>
                <label for="temporary_hit_points">Temporary Hit Points</label>
                <textarea name="temporary_hit_points" id="temporary_hit_points">{{ $character->temporary_hit_points }}</textarea>
            </div>

            <div>
                <label for="total_hit_dice">Total Hit Dice</label>
                <input name="total_hit_dice" id="total_hit_dice" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->total_hit_dice }}">
            </div>

            <div>
                <label for="hit_dice">Hit Dice</label>
                <input name="hit_dice" id="hit_dice" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->hit_dice }}">
            </div>

            <div id="death_saves">
                @foreach($character->death_saves['successes'] as $save)
                    <div class="success">
                        <label for="death_save_success_{{ $loop->iteration }}">Death Save Success {{ $loop->iteration }}</label>
                        <input name="death_saves[successes][{{ $loop->index }}]" id="death_save_success_{{ $loop->iteration }}" type="checkbox" {{ $character->death_saves['successes'][$loop->index] ? 'checked' : '' }}>
                    </div>
                @endforeach

                @foreach($character->death_saves['failures'] as $save)
                    <div class="failure">
                        <label for="death_save_failure_{{ $loop->iteration }}">Death Save Failure {{ $loop->iteration }}</label>
                        <input name="death_saves[failures][{{ $loop->index }}]" id="death_save_failure_{{ $loop->iteration }}" type="checkbox" {{ $character->death_saves['failures'][$loop->index] ? 'checked' : '' }}>
                    </div>
                @endforeach
            </div>

            <div id="weapons">
                @foreach($character->weapons as $weapon)
                    <div class="weapon">
                        <div class="name">
                            <label for="weapon_{{ $loop->iteration }}_name">Weapon {{ $loop->iteration }} Name</label>
                            <input name="weapons[{{ $loop->index }}][name]" id="weapon_{{ $loop->iteration }}_name" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->weapons[$loop->index]['name'] }}">
                        </div>

                        <div class="atk_bonus">
                            <label for="weapon_{{ $loop->iteration }}_atk_bonus">Weapon {{ $loop->iteration }} Atk Bonus</label>
                            <input name="weapons[{{ $loop->index }}][atk_bonus]" id="weapon_{{ $loop->iteration }}_atk_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->weapons[$loop->index]['atk_bonus'] }}">
                        </div>

                        <div class="damage_and_type">
                            <label for="weapon_{{ $loop->iteration }}_damage_and_type">Weapon {{ $loop->iteration }} Damage/Type</label>
                            <input name="weapons[{{ $loop->index }}][damage_and_type]" id="weapon_{{ $loop->iteration }}_damage_and_type" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->weapons[$loop->index]['damage_and_type'] }}">
                        </div>
                    </div>
                @endforeach
            </div>

            <div>
                <label for="attacks_and_spellcasting">Attacks &amp; Spellcasting</label>
                <textarea name="attacks_and_spellcasting" id="attacks_and_spellcasting">{{ $character->attacks_and_spellcasting }}</textarea>
            </div>

            <div id="money">
                <div>
                    <label for="cp">CP</label>
                    <input name="cp" id="cp" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->cp }}">
                </div>

                <div>
                    <label for="sp">SP</label>
                    <input name="sp" id="sp" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->sp }}">
                </div>

                <div>
                    <label for="ep">EP</label>
                    <input name="ep" id="ep" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->ep }}">
                </div>

                <div>
                    <label for="gp">GP</label>
                    <input name="gp" id="gp" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->gp }}">
                </div>

                <div>
                    <label for="pp">PP</label>
                    <input name="pp" id="pp" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->pp }}">
                </div>
            </div>

            <div>
                <label for="equipment">Equipment</label>
                <textarea name="equipment" id="equipment">{{ $character->equipment }}</textarea>
            </div>

            <div id="story">
                <div>
                    <label for="personality_traits">Personality Traits</label>
                    <textarea name="personality_traits" id="personality_traits">{{ $character->personality_traits }}</textarea>
                </div>

                <div>
                    <label for="ideals">Ideals</label>
                    <textarea name="ideals" id="ideals">{{ $character->ideals }}</textarea>
                </div>

                <div>
                    <label for="bonds">Bonds</label>
                    <textarea name="bonds" id="bonds">{{ $character->bonds }}</textarea>
                </div>

                <div>
                    <label for="flaws">Flaws</label>
                    <textarea name="flaws" id="flaws">{{ $character->flaws }}</textarea>
                </div>
            </div>

            <div>
                <label for="features_and_traits">Features &amp; Traits</label>
                <textarea name="features_and_traits" id="features_and_traits">{{ $character->features_and_traits }}</textarea>
            </div>
        </div>

        <div class="character-sheet" id="page-2">
            <div class="character_name">
                <label for="character_name_2">Character Name</label>
                <input id="character_name_2" type="text" value="{{ $character->character_name }}" disabled>
            </div>

            <div id="stats">
                <div class="top">
                    <label for="age">Age</label>
                    <input name="age" id="age" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->age }}">
                </div>

                <div class="top">
                    <label for="height">Height</label>
                    <input name="height" id="height" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->height }}">
                </div>

                <div class="top">
                    <label for="weight">Weight</label>
                    <input name="weight" id="weight" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->weight }}">
                </div>

                <div class="bottom">
                    <label for="eyes">Eyes</label>
                    <input name="eyes" id="eyes" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->eyes }}">
                </div>

                <div class="bottom">
                    <label for="skin">Skin</label>
                    <input name="skin" id="skin" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->skin }}">
                </div>

                <div class="bottom">
                    <label for="hair">Hair</label>
                    <input name="hair" id="hair" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->hair }}">
                </div>
            </div>

            <figure id="character_appearance">
                <img alt="character image" src="{{ asset('storage/' . ($character->character_appearance ?? 'warrior.jpg')) }}">
                <figcaption>character image</figcaption>
            </figure>

            <div>
                <label for="allies_and_organizations">Allies &amp; Organizations</label>
                <textarea name="allies_and_organizations" id="allies_and_organizations">{{ $character->allies_and_organizations }}</textarea>
            </div>

            <div>
                <label for="faction_name">Faction Name</label>
                <input name="faction_name" id="faction_name" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->faction_name }}">
            </div>

            <figure id="faction_symbol">
                <img alt="faction symbol image" src="{{ asset('storage/' . ($character->faction_symbol ?? 'no-faction.jpg')) }}">
                <figcaption>faction symbol image</figcaption>
            </figure>

            <div>
                <label for="character_backstory">Character Backstory</label>
                <textarea name="character_backstory" id="character_backstory">{{ $character->character_backstory }}</textarea>
            </div>

            <div>
                <label for="additional_features_and_traits">Additional Features &amp; Traits</label>
                <textarea name="additional_features_and_traits" id="additional_features_and_traits">{{ $character->additional_features_and_traits }}</textarea>
            </div>

            <div>
                <label for="treasure">Treasure</label>
                <textarea name="treasure" id="treasure">{{ $character->treasure }}</textarea>
            </div>
        </div>

        <div class="character-sheet" id="page-3">
            <div>
                <label for="spellcasting_class">Spellcasting Class</label>
                <input name="spellcasting_class" id="spellcasting_class" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spellcasting_class }}">
            </div>

            <div id="spell_power">
                <div>
                    <label for="spellcasting_ability">Spellcasting Ability</label>
                    <input name="spellcasting_ability" id="spellcasting_ability" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spellcasting_ability }}">
                </div>

                <div>
                    <label for="spell_save_dc">Spell Save DC</label>
                    <input name="spell_save_dc" id="spell_save_dc" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spell_save_dc }}">
                </div>

                <div>
                    <label for="spell_attack_bonus">Spell Attack Bonus</label>
                    <input name="spell_attack_bonus" id="spell_attack_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spell_attack_bonus }}">
                </div>
            </div>

            <div id="spells">
                <div class="spell_column" id="spell_column_1">
                    <div class="spell_column_inner">
                        @for($i = 0; $i < 3; $i++)
                            <div class="spell_slots_total">
                                <label for="spell_level_{{ $i }}_slots_total">Spell Level {{ $i }} Slots Total</label>
                                <input name="spells[{{ $i }}][slots_total]" id="spell_level_{{ $i }}_slots_total" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['slots_total'] }}">
                            </div>

                            <div class="spell_slots_expended">
                                <label for="spell_level_{{ $i }}_slots_expended">Spell Level {{ $i }} Slots Expended</label>
                                <input name="spells[{{ $i }}][slots_expended]" id="spell_level_{{ $i }}_slots_expended" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['slots_expended'] }}">
                            </div>

                            <div class="spell_list" id="spell_list_{{ $i }}">
                                @foreach($character->spells[$i]['list'] as $spell)
                                    <div class="spell" id="spell_level_{{ $i }}_spell_{{ $loop->index }}">
                                        <div class="spell_prepared">
                                            <label for="spell_level_{{ $i }}_spell_{{ $loop->index }}_prepared">Spell Level {{ $i }} Spell {{ $loop->iteration }} Prepared?</label>
                                            <input name="spells[{{ $i }}][list][{{ $loop->index }}][prepared]" id="spell_level_{{ $i }}_spell_{{ $loop->index }}_prepared" type="checkbox" {{ $character->spells[$i]['list'][$loop->index]['prepared'] ? 'checked' : '' }}>
                                        </div>

                                        <div class="spell_name">
                                            <label for="spell_level_{{ $i }}_spell_{{ $loop->index }}_spell">Spell Level {{ $i }} Spell {{ $loop->iteration }} Name</label>
                                            <input name="spells[{{ $i }}][list][{{ $loop->index }}][spell]" id="spell_level_{{ $i }}_spell_{{ $loop->index }}_spell" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['list'][$loop->index]['spell'] }}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endfor
                    </div>
                </div>

                <div class="spell_column" id="spell_column_2">
                    <div class="spell_column_inner">
                        @for($i = 3; $i < 6; $i++)
                            <div class="spell_slots_total">
                                <label for="spell_level_{{ $i }}_slots_total">Spell Level {{ $i }} Slots Total</label>
                                <input name="spells[{{ $i }}][slots_total]" id="spell_level_{{ $i }}_slots_total" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['slots_total'] }}">
                            </div>

                            <div class="spell_slots_expended">
                                <label for="spell_level_{{ $i }}_slots_expended">Spell Level {{ $i }} Slots Expended</label>
                                <input name="spells[{{ $i }}][slots_expended]" id="spell_level_{{ $i }}_slots_expended" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['slots_expended'] }}">
                            </div>

                            <div class="spell_list" id="spell_list_{{ $i }}">
                                @foreach($character->spells[$i]['list'] as $spell)
                                    <div class="spell" id="spell_level_{{ $i }}_spell_{{ $loop->index }}">
                                        <div class="spell_prepared">
                                            <label for="spell_level_{{ $i }}_spell_{{ $loop->index }}_prepared">Spell Level {{ $i }} Spell {{ $loop->iteration }} Prepared?</label>
                                            <input name="spells[{{ $i }}][list][{{ $loop->index }}][prepared]" id="spell_level_{{ $i }}_spell_{{ $loop->index }}_prepared" type="checkbox" {{ $character->spells[$i]['list'][$loop->index]['prepared'] ? 'checked' : '' }}>
                                        </div>

                                        <div class="spell_name">
                                            <label for="spell_level_{{ $i }}_spell_{{ $loop->index }}_spell">Spell Level {{ $i }} Spell {{ $loop->iteration }} Name</label>
                                            <input name="spells[{{ $i }}][list][{{ $loop->index }}][spell]" id="spell_level_{{ $i }}_spell_{{ $loop->index }}_spell" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['list'][$loop->index]['spell'] }}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endfor
                    </div>
                </div>

                <div class="spell_column" id="spell_column_3">
                    <div class="spell_column_inner">
                        @for($i = 6; $i < 10; $i++)
                            <div class="spell_slots_total">
                                <label for="spell_level_{{ $i }}_slots_total">Spell Level {{ $i }} Slots Total</label>
                                <input name="spells[{{ $i }}][slots_total]" id="spell_level_{{ $i }}_slots_total" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['slots_total'] }}">
                            </div>

                            <div class="spell_slots_expended">
                                <label for="spell_level_{{ $i }}_slots_expended">Spell Level {{ $i }} Slots Expended</label>
                                <input name="spells[{{ $i }}][slots_expended]" id="spell_level_{{ $i }}_slots_expended" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['slots_expended'] }}">
                            </div>

                            <div class="spell_list" id="spell_list_{{ $i }}">
                                @foreach($character->spells[$i]['list'] as $spell)
                                    <div class="spell" id="spell_level_{{ $i }}_spell_{{ $loop->index }}">
                                        <div class="spell_prepared">
                                            <label for="spell_level_{{ $i }}_spell_{{ $loop->index }}_prepared">Spell Level {{ $i }} Spell {{ $loop->iteration }} Prepared?</label>
                                            <input name="spells[{{ $i }}][list][{{ $loop->index }}][prepared]" id="spell_level_{{ $i }}_spell_{{ $loop->index }}_prepared" type="checkbox" {{ $character->spells[$i]['list'][$loop->index]['prepared'] ? 'checked' : '' }}>
                                        </div>

                                        <div class="spell_name">
                                            <label for="spell_level_{{ $i }}_spell_{{ $loop->index }}_spell">Spell Level {{ $i }} Spell {{ $loop->iteration }} Name</label>
                                            <input name="spells[{{ $i }}][list][{{ $loop->index }}][spell]" id="spell_level_{{ $i }}_spell_{{ $loop->index }}_spell" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['list'][$loop->index]['spell'] }}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
