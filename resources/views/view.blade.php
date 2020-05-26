@extends('layouts.app')

@section('content')
    <input disabled id="character_id" type="hidden" value="{{ $character->id }}">

    <form class="view" id="sheet">
        <div class="character-sheet" id="page-1">
            <section>
                <input name="toggles[character_information]" type="hidden" value="0">
                <input class="toggle" name="toggles[character_information]" id="toggle_character_information" type="checkbox" value="1" {{ $character->toggles['character_information'] ? 'checked' : '' }}>
                <label class="toggle_label" for="toggle_character_information">
                    Character Information
                </label>

                <div class="expander">
                    <div class="character_name">
                        <label for="character_name">Character Name</label>
                        <input disabled name="character_name" id="character_name" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->character_name }}">
                    </div>

                    <div id="details">
                        <div class="top">
                            <label for="class_and_level">Class &amp; Level</label>
                            <input disabled name="class_and_level" id="class_and_level" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->class_and_level }}">
                        </div>

                        <div class="top">
                            <label for="background">Background</label>
                            <input disabled name="background" id="background" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->background }}">
                        </div>

                        <div class="top">
                            <label for="player_name">Player Name</label>
                            <input disabled id="player_name" type="text" value="{{ $character->user->name }}" disabled>
                        </div>

                        <div class="bottom">
                            <label for="race">Race</label>
                            <input disabled name="race" id="race" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->race }}">
                        </div>

                        <div class="bottom">
                            <label for="alignment">Alignment</label>
                            <input disabled name="alignment" id="alignment" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->alignment }}">
                        </div>

                        <div class="bottom">
                            <label for="experience_points">Experience Points</label>
                            <input disabled name="experience_points" id="experience_points" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->experience_points }}">
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <input name="toggles[ability_scores]" type="hidden" value="0">
                <input class="toggle" name="toggles[ability_scores]" id="toggle_ability_scores" type="checkbox" value="1" {{ $character->toggles['ability_scores'] ? 'checked' : '' }}>
                <label class="toggle_label" for="toggle_ability_scores">
                    Ability Scores
                </label>

                <div class="expander">
                    <div class="abilities">
                        <div class="ability" id="strength">
                            <div class="score">
                                <label for="strength_score">Strength Score</label>
                                <input disabled name="strength[score]" id="strength_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->strength['score'] }}">
                            </div>

                            <div class="bonus">
                                <label for="strength_bonus">Strength Bonus</label>
                                <input disabled name="strength[bonus]" id="strength_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->strength['bonus'] }}">
                            </div>
                        </div>

                        <div class="ability" id="dexterity">
                            <div class="score">
                                <label for="dexterity_score">Dexterity Score</label>
                                <input disabled name="dexterity[score]" id="dexterity_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->dexterity['score'] }}">
                            </div>

                            <div class="bonus">
                                <label for="dexterity_bonus">Dexterity Bonus</label>
                                <input disabled name="dexterity[bonus]" id="dexterity_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->dexterity['bonus'] }}">
                            </div>
                        </div>

                        <div class="ability" id="constitution">
                            <div class="score">
                                <label for="constitution_score">Constitution Score</label>
                                <input disabled name="constitution[score]" id="constitution_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->constitution['score'] }}">
                            </div>

                            <div class="bonus">
                                <label for="constitution_bonus">Constitution Bonus</label>
                                <input disabled name="constitution[bonus]" id="constitution_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->constitution['bonus'] }}">
                            </div>
                        </div>

                        <div class="ability" id="intelligence">
                            <div class="score">
                                <label for="intelligence_score">Intelligence Score</label>
                                <input disabled name="intelligence[score]" id="intelligence_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->intelligence['score'] }}">
                            </div>

                            <div class="bonus">
                                <label for="intelligence_bonus">Intelligence Bonus</label>
                                <input disabled name="intelligence[bonus]" id="intelligence_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->intelligence['bonus'] }}">
                            </div>
                        </div>

                        <div class="ability" id="wisdom">
                            <div class="score">
                                <label for="wisdom_score">Wisdom Score</label>
                                <input disabled name="wisdom[score]" id="wisdom_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->wisdom['score'] }}">
                            </div>

                            <div class="bonus">
                                <label for="wisdom_bonus">Wisdom Bonus</label>
                                <input disabled name="wisdom[bonus]" id="wisdom_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->wisdom['bonus'] }}">
                            </div>
                        </div>

                        <div class="ability" id="charisma">
                            <div class="score">
                                <label for="charisma_score">Charisma Score</label>
                                <input disabled name="charisma[score]" id="charisma_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->charisma['score'] }}">
                            </div>

                            <div class="bonus">
                                <label for="charisma_bonus">Charisma Bonus</label>
                                <input disabled name="charisma[bonus]" id="charisma_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->charisma['bonus'] }}">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <input name="toggles[skills]" type="hidden" value="0">
                <input class="toggle" name="toggles[skills]" id="toggle_skills" type="checkbox" value="1" {{ $character->toggles['skills'] ? 'checked' : '' }}>
                <label class="toggle_label" for="toggle_skills">
                    Skills
                </label>

                <div class="expander">
                    <div id="throws">
                        <div class="skill" id="acrobatics">
                            <div class="class_skill">
                                <label for="acrobatics_class_skill">Acrobatics Class Skill?</label>
                                <input disabled name="acrobatics[class_skill]" type="hidden" value="0"><input disabled name="acrobatics[class_skill]" id="acrobatics_class_skill" type="checkbox" value="1" {{ $character->acrobatics['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="acrobatics_score">Acrobatics Score</label>
                                <input disabled name="acrobatics[score]" id="acrobatics_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->acrobatics['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="animal_handling">
                            <div class="class_skill">
                                <label for="animal_handling_class_skill">Animal Handling Class Skill?</label>
                                <input disabled name="animal_handling[class_skill]" type="hidden" value="0"><input disabled name="animal_handling[class_skill]" id="animal_handling_class_skill" type="checkbox" value="1" {{ $character->animal_handling['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="animal_handling_score">Animal Handling Score</label>
                                <input disabled name="animal_handling[score]" id="animal_handling_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->animal_handling['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="arcana">
                            <div class="class_skill">
                                <label for="arcana_class_skill">Arcana Class Skill?</label>
                                <input disabled name="arcana[class_skill]" type="hidden" value="0"><input disabled name="arcana[class_skill]" id="arcana_class_skill" type="checkbox" value="1" {{ $character->arcana['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="arcana_score">Arcana Score</label>
                                <input disabled name="arcana[score]" id="arcana_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->arcana['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="athletics">
                            <div class="class_skill">
                                <label for="athletics_class_skill">Athletics Class Skill?</label>
                                <input disabled name="athletics[class_skill]" type="hidden" value="0"><input disabled name="athletics[class_skill]" id="athletics_class_skill" type="checkbox" value="1" {{ $character->athletics['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="athletics_score">Athletics Score</label>
                                <input disabled name="athletics[score]" id="athletics_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->athletics['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="deception">
                            <div class="class_skill">
                                <label for="deception_class_skill">Deception Class Skill?</label>
                                <input disabled name="deception[class_skill]" type="hidden" value="0"><input disabled name="deception[class_skill]" id="deception_class_skill" type="checkbox" value="1" {{ $character->deception['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="deception_score">Deception Score</label>
                                <input disabled name="deception[score]" id="deception_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->deception['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="history">
                            <div class="class_skill">
                                <label for="history_class_skill">History Class Skill?</label>
                                <input disabled name="history[class_skill]" type="hidden" value="0"><input disabled name="history[class_skill]" id="history_class_skill" type="checkbox" value="1" {{ $character->history['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="history_score">History Score</label>
                                <input disabled name="history[score]" id="history_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->history['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="insight">
                            <div class="class_skill">
                                <label for="insight_class_skill">Insight Class Skill?</label>
                                <input disabled name="insight[class_skill]" type="hidden" value="0"><input disabled name="insight[class_skill]" id="insight_class_skill" type="checkbox" value="1" {{ $character->insight['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="insight_score">Insight Score</label>
                                <input disabled name="insight[score]" id="insight_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->insight['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="intimidation">
                            <div class="class_skill">
                                <label for="intimidation_class_skill">Intimidation Class Skill?</label>
                                <input disabled name="intimidation[class_skill]" type="hidden" value="0"><input disabled name="intimidation[class_skill]" id="intimidation_class_skill" type="checkbox" value="1" {{ $character->intimidation['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="intimidation_score">Intimidation Score</label>
                                <input disabled name="intimidation[score]" id="intimidation_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->intimidation['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="investigation">
                            <div class="class_skill">
                                <label for="investigation_class_skill">Investigation Class Skill?</label>
                                <input disabled name="investigation[class_skill]" type="hidden" value="0"><input disabled name="investigation[class_skill]" id="investigation_class_skill" type="checkbox" value="1" {{ $character->investigation['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="investigation_score">Investigation Score</label>
                                <input disabled name="investigation[score]" id="investigation_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->investigation['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="medicine">
                            <div class="class_skill">
                                <label for="medicine_class_skill">Medicine Class Skill?</label>
                                <input disabled name="medicine[class_skill]" type="hidden" value="0"><input disabled name="medicine[class_skill]" id="medicine_class_skill" type="checkbox" value="1" {{ $character->medicine['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="medicine_score">Medicine Score</label>
                                <input disabled name="medicine[score]" id="medicine_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->medicine['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="nature">
                            <div class="class_skill">
                                <label for="nature_class_skill">Nature Class Skill?</label>
                                <input disabled name="nature[class_skill]" type="hidden" value="0"><input disabled name="nature[class_skill]" id="nature_class_skill" type="checkbox" value="1" {{ $character->nature['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="nature_score">Nature Score</label>
                                <input disabled name="nature[score]" id="nature_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->nature['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="perception">
                            <div class="class_skill">
                                <label for="perception_class_skill">Perception Class Skill?</label>
                                <input disabled name="perception[class_skill]" type="hidden" value="0"><input disabled name="perception[class_skill]" id="perception_class_skill" type="checkbox" value="1" {{ $character->perception['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="perception_score">Perception Score</label>
                                <input disabled name="perception[score]" id="perception_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->perception['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="performance">
                            <div class="class_skill">
                                <label for="performance_class_skill">Performance Class Skill?</label>
                                <input disabled name="performance[class_skill]" type="hidden" value="0"><input disabled name="performance[class_skill]" id="performance_class_skill" type="checkbox" value="1" {{ $character->performance['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="performance_score">Performance Score</label>
                                <input disabled name="performance[score]" id="performance_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->performance['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="persuasion">
                            <div class="class_skill">
                                <label for="persuasion_class_skill">Persuasion Class Skill?</label>
                                <input disabled name="persuasion[class_skill]" type="hidden" value="0"><input disabled name="persuasion[class_skill]" id="persuasion_class_skill" type="checkbox" value="1" {{ $character->persuasion['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="persuasion_score">Persuasion Score</label>
                                <input disabled name="persuasion[score]" id="persuasion_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->persuasion['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="religion">
                            <div class="class_skill">
                                <label for="religion_class_skill">Religion Class Skill?</label>
                                <input disabled name="religion[class_skill]" type="hidden" value="0"><input disabled name="religion[class_skill]" id="religion_class_skill" type="checkbox" value="1" {{ $character->religion['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="religion_score">Religion Score</label>
                                <input disabled name="religion[score]" id="religion_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->religion['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="sleight_of_hand">
                            <div class="class_skill">
                                <label for="sleight_of_hand_class_skill">Sleight of Hand Class Skill?</label>
                                <input disabled name="sleight_of_hand[class_skill]" type="hidden" value="0"><input disabled name="sleight_of_hand[class_skill]" id="sleight_of_hand_class_skill" type="checkbox" value="1" {{ $character->sleight_of_hand['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="sleight_of_hand_score">Sleight of Hand Score</label>
                                <input disabled name="sleight_of_hand[score]" id="sleight_of_hand_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->sleight_of_hand['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="stealth">
                            <div class="class_skill">
                                <label for="stealth_class_skill">Stealth Class Skill?</label>
                                <input disabled name="stealth[class_skill]" type="hidden" value="0"><input disabled name="stealth[class_skill]" id="stealth_class_skill" type="checkbox" value="1" {{ $character->stealth['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="stealth_score">Stealth Score</label>
                                <input disabled name="stealth[score]" id="stealth_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->stealth['score'] }}">
                            </div>
                        </div>

                        <div class="skill" id="survival">
                            <div class="class_skill">
                                <label for="survival_class_skill">Survival Class Skill?</label>
                                <input disabled name="survival[class_skill]" type="hidden" value="0"><input disabled name="survival[class_skill]" id="survival_class_skill" type="checkbox" value="1" {{ $character->survival['class_skill'] ? 'checked' : '' }}>
                            </div>

                            <div class="score">
                                <label for="survival_score">Survival Score</label>
                                <input disabled name="survival[score]" id="survival_score" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->survival['score'] }}">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <input name="toggles[throws]" type="hidden" value="0">
                <input class="toggle" name="toggles[throws]" id="toggle_throws" type="checkbox" value="1" {{ $character->toggles['throws'] ? 'checked' : '' }}>
                <label class="toggle_label" for="toggle_throws">
                    Throws
                </label>

                <div class="expander">
                    <div id="throws">
                        <p>
                            Saves
                        </p>

                        <div class="save" id="strength_save">
                            <div class="class_save">
                                <label for="strength_class_save">Strength Class Save?</label>
                                <input disabled name="strength[class_save]" type="hidden" value="0"><input disabled name="strength[class_save]" id="strength_class_save" type="checkbox" value="1" {{ $character->strength['class_save'] ? 'checked' : '' }}>
                            </div>

                            <div class="saving_throw">
                                <label for="strength_saving_throw">Strength Saving Throw</label>
                                <input disabled name="strength[saving_throw]" id="strength_saving_throw" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->strength['saving_throw'] }}">
                            </div>
                        </div>

                        <div class="save" id="dexterity_save">
                            <div class="class_save">
                                <label for="dexterity_class_save">Dexterity Class Save?</label>
                                <input disabled name="dexterity[class_save]" type="hidden" value="0"><input disabled name="dexterity[class_save]" id="dexterity_class_save" type="checkbox" value="1" {{ $character->dexterity['class_save'] ? 'checked' : '' }}>
                            </div>

                            <div class="saving_throw">
                                <label for="dexterity_saving_throw">Dexterity Saving Throw</label>
                                <input disabled name="dexterity[saving_throw]" id="dexterity_saving_throw" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->dexterity['saving_throw'] }}">
                            </div>
                        </div>

                        <div class="save" id="constitution_save">
                            <div class="class_save">
                                <label for="constitution_class_save">Constitution Class Save?</label>
                                <input disabled name="constitution[class_save]" type="hidden" value="0"><input disabled name="constitution[class_save]" id="constitution_class_save" type="checkbox" value="1" {{ $character->constitution['class_save'] ? 'checked' : '' }}>
                            </div>

                            <div class="saving_throw">
                                <label for="constitution_saving_throw">Constitution Saving Throw</label>
                                <input disabled name="constitution[saving_throw]" id="constitution_saving_throw" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->constitution['saving_throw'] }}">
                            </div>
                        </div>

                        <div class="save" id="intelligence_save">
                            <div class="class_save">
                                <label for="intelligence_class_save">Intelligence Class Save?</label>
                                <input disabled name="intelligence[class_save]" type="hidden" value="0"><input disabled name="intelligence[class_save]" id="intelligence_class_save" type="checkbox" value="1" {{ $character->intelligence['class_save'] ? 'checked' : '' }}>
                            </div>

                            <div class="saving_throw">
                                <label for="intelligence_saving_throw">Intelligence Saving Throw</label>
                                <input disabled name="intelligence[saving_throw]" id="intelligence_saving_throw" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->intelligence['saving_throw'] }}">
                            </div>
                        </div>

                        <div class="save" id="wisdom_save">
                            <div class="class_save">
                                <label for="wisdom_class_save">Wisdom Class Save?</label>
                                <input disabled name="wisdom[class_save]" type="hidden" value="0"><input disabled name="wisdom[class_save]" id="wisdom_class_save" type="checkbox" value="1" {{ $character->wisdom['class_save'] ? 'checked' : '' }}>
                            </div>

                            <div class="saving_throw">
                                <label for="wisdom_saving_throw">Wisdom Saving Throw</label>
                                <input disabled name="wisdom[saving_throw]" id="wisdom_saving_throw" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->wisdom['saving_throw'] }}">
                            </div>
                        </div>

                        <div class="save" id="charisma_save">
                            <div class="class_save">
                                <label for="charisma_class_save">Charisma Class Save?</label>
                                <input disabled name="charisma[class_save]" type="hidden" value="0"><input disabled name="charisma[class_save]" id="charisma_class_save" type="checkbox" value="1" {{ $character->charisma['class_save'] ? 'checked' : '' }}>
                            </div>

                            <div class="saving_throw">
                                <label for="charisma_saving_throw">Charisma Saving Throw</label>
                                <input disabled name="charisma[saving_throw]" id="charisma_saving_throw" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->charisma['saving_throw'] }}">
                            </div>
                        </div>
                    </div>

                    <p>
                        Others
                    </p>

                    <div class="passive">
                        <label for="inspiration">Inspiration</label>
                        <input disabled name="inspiration" id="inspiration" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->inspiration }}">
                    </div>

                    <div class="passive">
                        <label for="proficiency_bonus">Proficiency Bonus</label>
                        <input disabled name="proficiency_bonus" id="proficiency_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->proficiency_bonus }}">
                    </div>

                    <div class="passive">
                        <label for="passive_wisdom">Passive Wisdom (Perception)</label>
                        <input disabled name="passive_wisdom" id="passive_wisdom" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->passive_wisdom }}">
                    </div>
                </div>
            </section>

            <section>
                <input name="toggles[health_defense]" type="hidden" value="0">
                <input class="toggle" name="toggles[health_defense]" id="toggle_health_defense" type="checkbox" value="1" {{ $character->toggles['health_defense'] ? 'checked' : '' }}>
                <label class="toggle_label" for="toggle_health_defense">
                    Health &amp; Defense
                </label>

                <div class="expander">
                    <div class="health_defense">
                        <label for="armor_class">Armor Class</label>
                        <input disabled name="armor_class" id="armor_class" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->armor_class }}">
                    </div>

                    <div class="health_defense">
                        <label for="initiative">Initiative</label>
                        <input disabled name="initiative" id="initiative" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->initiative }}">
                    </div>

                    <div class="health_defense">
                        <label for="speed">Speed</label>
                        <input disabled name="speed" id="speed" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->speed }}">
                    </div>

                    <div class="health_defense">
                        <label for="hit_point_maximum">Hit Point Maximum</label>
                        <input disabled name="hit_point_maximum" id="hit_point_maximum" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->hit_point_maximum }}">
                    </div>

                    <div class="health_defense">
                        <label for="current_hit_points">Current Hit Points</label>
                        <textarea disabled name="current_hit_points" id="current_hit_points">{{ $character->current_hit_points }}</textarea>
                    </div>

                    <div class="health_defense">
                        <label for="temporary_hit_points">Temporary Hit Points</label>
                        <textarea disabled name="temporary_hit_points" id="temporary_hit_points">{{ $character->temporary_hit_points }}</textarea>
                    </div>

                    <div class="health_defense">
                        <label for="total_hit_dice">Total Hit Dice</label>
                        <input disabled name="total_hit_dice" id="total_hit_dice" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->total_hit_dice }}">
                    </div>

                    <div class="health_defense">
                        <label for="hit_dice">Hit Dice</label>
                        <input disabled name="hit_dice" id="hit_dice" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->hit_dice }}">
                    </div>

                    <p>
                        Death Saves
                    </p>

                    <div id="death_saves">
                        @foreach($character->death_saves['successes'] as $save)
                            <div class="success">
                                <label for="death_save_success_{{ $loop->iteration }}">Death Save Success {{ $loop->iteration }}</label>
                                <input disabled name="death_saves[successes][{{ $loop->index }}]" type="hidden" value="0"><input disabled name="death_saves[successes][{{ $loop->index }}]" id="death_save_success_{{ $loop->iteration }}" type="checkbox" value="1" {{ $character->death_saves['successes'][$loop->index] ? 'checked' : '' }}>
                            </div>
                        @endforeach

                        @foreach($character->death_saves['failures'] as $save)
                            <div class="failure">
                                <label for="death_save_failure_{{ $loop->iteration }}">Death Save Failure {{ $loop->iteration }}</label>
                                <input disabled name="death_saves[failures][{{ $loop->index }}]" type="hidden" value="0"><input disabled name="death_saves[failures][{{ $loop->index }}]" id="death_save_failure_{{ $loop->iteration }}" type="checkbox" value="1" {{ $character->death_saves['failures'][$loop->index] ? 'checked' : '' }}>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section>
                <input name="toggles[attacking]" type="hidden" value="0">
                <input class="toggle" name="toggles[attacking]" id="toggle_attacking" type="checkbox" value="1" {{ $character->toggles['attacking'] ? 'checked' : '' }}>
                <label class="toggle_label" for="toggle_attacking">
                    Attacking
                </label>

                <div class="expander">
                    <div id="weapons">
                        @foreach($character->weapons as $weapon)
                            <div class="weapon">
                                <div class="name">
                                    <label for="weapon_{{ $loop->iteration }}_name">Weapon {{ $loop->iteration }} Name</label>
                                    <input disabled name="weapons[{{ $loop->index }}][name]" id="weapon_{{ $loop->iteration }}_name" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->weapons[$loop->index]['name'] }}">
                                </div>

                                <div class="atk_bonus">
                                    <label for="weapon_{{ $loop->iteration }}_atk_bonus">Weapon {{ $loop->iteration }} Atk Bonus</label>
                                    <input disabled name="weapons[{{ $loop->index }}][atk_bonus]" id="weapon_{{ $loop->iteration }}_atk_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->weapons[$loop->index]['atk_bonus'] }}">
                                </div>

                                <div class="damage_and_type">
                                    <label for="weapon_{{ $loop->iteration }}_damage_and_type">Weapon {{ $loop->iteration }} Damage/Type</label>
                                    <input disabled name="weapons[{{ $loop->index }}][damage_and_type]" id="weapon_{{ $loop->iteration }}_damage_and_type" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->weapons[$loop->index]['damage_and_type'] }}">
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div id="text_attacks_spellcasting">
                        <label for="attacks_and_spellcasting">Attacks &amp; Spellcasting</label>
                        <textarea disabled name="attacks_and_spellcasting" id="attacks_and_spellcasting">{{ $character->attacks_and_spellcasting }}</textarea>
                    </div>
                </div>
            </section>

            <section>
                <input name="toggles[gear]" type="hidden" value="0">
                <input class="toggle" name="toggles[gear]" id="toggle_gear" type="checkbox" value="1" {{ $character->toggles['gear'] ? 'checked' : '' }}>
                <label class="toggle_label" for="toggle_gear">
                    Gear
                </label>

                <div class="expander">
                    <div id="money">
                        <div class="money">
                            <label for="cp">CP</label>
                            <input disabled name="cp" id="cp" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->cp }}">
                        </div>

                        <div class="money">
                            <label for="sp">SP</label>
                            <input disabled name="sp" id="sp" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->sp }}">
                        </div>

                        <div class="money">
                            <label for="ep">EP</label>
                            <input disabled name="ep" id="ep" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->ep }}">
                        </div>

                        <div class="money">
                            <label for="gp">GP</label>
                            <input disabled name="gp" id="gp" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->gp }}">
                        </div>

                        <div class="money">
                            <label for="pp">PP</label>
                            <input disabled name="pp" id="pp" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->pp }}">
                        </div>
                    </div>

                    <div id="text_equipment">
                        <label for="equipment">Equipment</label>
                        <textarea disabled name="equipment" id="equipment">{{ $character->equipment }}</textarea>
                    </div>
                </div>
            </section>

            <section>
                <input name="toggles[story_background]" type="hidden" value="0">
                <input class="toggle" name="toggles[story_background]" id="toggle_story_background" type="checkbox" value="1" {{ $character->toggles['story_background'] ? 'checked' : '' }}>
                <label class="toggle_label" for="toggle_story_background">
                    Story/Background
                </label>

                <div class="expander">
                    <div id="story">
                        <div>
                            <label for="personality_traits">Personality Traits</label>
                            <textarea disabled name="personality_traits" id="personality_traits">{{ $character->personality_traits }}</textarea>
                        </div>

                        <div>
                            <label for="ideals">Ideals</label>
                            <textarea disabled name="ideals" id="ideals">{{ $character->ideals }}</textarea>
                        </div>

                        <div>
                            <label for="bonds">Bonds</label>
                            <textarea disabled name="bonds" id="bonds">{{ $character->bonds }}</textarea>
                        </div>

                        <div>
                            <label for="flaws">Flaws</label>
                            <textarea disabled name="flaws" id="flaws">{{ $character->flaws }}</textarea>
                        </div>
                    </div>

                    <div id="text_languages">
                        <label for="other_proficiencies_and_languages">Other Proficiencies &amp; Languages</label>
                        <textarea disabled name="other_proficiencies_and_languages" id="other_proficiencies_and_languages">{{ $character->other_proficiencies_and_languages }}</textarea>
                    </div>

                    <div id="text_traits">
                        <label for="features_and_traits">Features &amp; Traits</label>
                        <textarea disabled name="features_and_traits" id="features_and_traits">{{ $character->features_and_traits }}</textarea>
                    </div>
                </div>
            </section>
        </div>

        <div class="character-sheet" id="page-2">
            <section>
                <input name="toggles[biological_information]" type="hidden" value="0">
                <input class="toggle" name="toggles[biological_information]" id="toggle_biological_information" type="checkbox" value="1" {{ $character->toggles['biological_information'] ? 'checked' : '' }}>
                <label class="toggle_label" for="toggle_biological_information">
                    Biological Information
                </label>

                <div class="expander">
                    <div class="character_name">
                        <label for="character_name_2">Character Name</label>
                        <input disabled id="character_name_2" type="text" value="{{ $character->character_name }}" disabled>
                    </div>

                    <div id="stats">
                        <div class="top">
                            <label for="age">Age</label>
                            <input disabled name="age" id="age" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->age }}">
                        </div>

                        <div class="top">
                            <label for="height">Height</label>
                            <input disabled name="height" id="height" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->height }}">
                        </div>

                        <div class="top">
                            <label for="weight">Weight</label>
                            <input disabled name="weight" id="weight" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->weight }}">
                        </div>

                        <div class="bottom">
                            <label for="eyes">Eyes</label>
                            <input disabled name="eyes" id="eyes" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->eyes }}">
                        </div>

                        <div class="bottom">
                            <label for="skin">Skin</label>
                            <input disabled name="skin" id="skin" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->skin }}">
                        </div>

                        <div class="bottom">
                            <label for="hair">Hair</label>
                            <input disabled name="hair" id="hair" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->hair }}">
                        </div>
                    </div>

                    <p>
                        Character Appearance
                    </p>

                    <figure id="character_appearance">
                        <img alt="character image" src="{{ asset('storage/' . ($character->character_appearance ?? 'warrior.jpg')) }}">
                        <figcaption>character image</figcaption>
                    </figure>
                </div>
            </section>

            <section>
                <input name="toggles[other_information]" type="hidden" value="0">
                <input class="toggle" name="toggles[other_information]" id="toggle_other_information" type="checkbox" value="1" {{ $character->toggles['other_information'] ? 'checked' : '' }}>
                <label class="toggle_label" for="toggle_other_information">
                    Other Information
                </label>

                <div class="expander">
                    <div class="other_info">
                        <label for="allies_and_organizations">Allies &amp; Organizations</label>
                        <textarea disabled name="allies_and_organizations" id="allies_and_organizations">{{ $character->allies_and_organizations }}</textarea>
                    </div>

                    <div class="other_info">
                        <label for="faction_name">Faction Name</label>
                        <input disabled name="faction_name" id="faction_name" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->faction_name }}">
                    </div>

                    <p>
                        Faction Symbol
                    </p>

                    <figure id="faction_symbol">
                        <img alt="faction symbol image" src="{{ asset('storage/' . ($character->faction_symbol ?? 'no-faction.jpg')) }}">
                        <figcaption>faction symbol image</figcaption>
                    </figure>

                    <div id="text_backstory">
                        <label for="character_backstory">Character Backstory</label>
                        <textarea disabled name="character_backstory" id="character_backstory">{{ $character->character_backstory }}</textarea>
                    </div>

                    <div class="other_info">
                        <label for="additional_features_and_traits">Additional Features &amp; Traits</label>
                        <textarea disabled name="additional_features_and_traits" id="additional_features_and_traits">{{ $character->additional_features_and_traits }}</textarea>
                    </div>

                    <div class="other_info">
                        <label for="treasure">Treasure</label>
                        <textarea disabled name="treasure" id="treasure">{{ $character->treasure }}</textarea>
                    </div>
                </div>
            </section>
        </div>

        <div class="character-sheet" id="page-3">
            <section>
                <input name="toggles[spellcaster_information]" type="hidden" value="0">
                <input class="toggle" name="toggles[spellcaster_information]" id="toggle_spellcaster_information" type="checkbox" value="1" {{ $character->toggles['spellcaster_information'] ? 'checked' : '' }}>
                <label class="toggle_label" for="toggle_spellcaster_information">
                    Spellcaster Information
                </label>

                <div class="expander">
                    <div class="spellcasting">
                        <label for="spellcasting_class">Spellcasting Class</label>
                        <input disabled name="spellcasting_class" id="spellcasting_class" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spellcasting_class }}">
                    </div>

                    <div id="spell_power">
                        <div class="spellcasting">
                            <label for="spellcasting_ability">Spellcasting Ability</label>
                            <input disabled name="spellcasting_ability" id="spellcasting_ability" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spellcasting_ability }}">
                        </div>

                        <div class="spellcasting">
                            <label for="spell_save_dc">Spell Save DC</label>
                            <input disabled name="spell_save_dc" id="spell_save_dc" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spell_save_dc }}">
                        </div>

                        <div class="spellcasting">
                            <label for="spell_attack_bonus">Spell Attack Bonus</label>
                            <input disabled name="spell_attack_bonus" id="spell_attack_bonus" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spell_attack_bonus }}">
                        </div>
                    </div>
                </div>
            </section>

            <div id="spells">
                <div class="spell_column" id="spell_column_1">
                    <div class="spell_column_inner">
                        @for($i = 0; $i < 3; $i++)
                            <section>
                                <input name="toggles[spells][{{ $i }}]" type="hidden" value="0">
                                <input class="toggle" name="toggles[spells][{{ $i }}]" id="toggle_spell_level_{{ $i }}" type="checkbox" value="1" {{ $character->toggles['spells'][$i] ? 'checked' : '' }}>
                                <label class="toggle_label" for="toggle_spell_level_{{ $i }}">
                                    @if($i == 0)
                                        Cantrips
                                    @else
                                        Level {{ $i }} Spells
                                    @endif
                                </label>

                                <div class="expander" id="spell_expander_{{ $i }}">
                                    <div class="spell_slots">
                                        <div class="spell_slots_total">
                                            <label for="spell_level_{{ $i }}_slots_total">Spell Level {{ $i }} Slots Total</label>
                                            <input disabled name="spells[{{ $i }}][slots_total]" id="spell_level_{{ $i }}_slots_total" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['slots_total'] }}">
                                        </div>

                                        <div class="spell_slots_expended">
                                            <label for="spell_level_{{ $i }}_slots_expended">Spell Level {{ $i }} Slots Expended</label>
                                            <input disabled name="spells[{{ $i }}][slots_expended]" id="spell_level_{{ $i }}_slots_expended" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['slots_expended'] }}">
                                        </div>
                                    </div>

                                    <p>
                                        Spell List
                                    </p>

                                    <div class="spell_list" id="spell_list_{{ $i }}">
                                        @foreach($character->spells[$i]['list'] as $spell)
                                            <div class="spell" id="spell_level_{{ $i }}_spell_{{ $loop->index }}">
                                                <div class="spell_prepared">
                                                    <label for="spell_level_{{ $i }}_spell_{{ $loop->index }}_prepared">@if($i == 0) Cantrip @else Spell Level {{ $i }} Spell {{ $loop->iteration }} @endif Prepared?</label>
                                                    <input disabled name="spells[{{ $i }}][list][{{ $loop->index }}][prepared]" type="hidden" value="0"><input disabled name="spells[{{ $i }}][list][{{ $loop->index }}][prepared]" id="spell_level_{{ $i }}_spell_{{ $loop->index }}_prepared" type="checkbox" value="1" {{ $character->spells[$i]['list'][$loop->index]['prepared'] ? 'checked' : '' }}>
                                                </div>

                                                <div class="spell_name">
                                                    <label for="spell_level_{{ $i }}_spell_{{ $loop->index }}_spell">@if($i == 0) Cantrip @else Spell Level {{ $i }} Spell {{ $loop->iteration }} @endif Name</label>
                                                    <input disabled name="spells[{{ $i }}][list][{{ $loop->index }}][spell]" id="spell_level_{{ $i }}_spell_{{ $loop->index }}_spell" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['list'][$loop->index]['spell'] }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                        @endfor
                    </div>
                </div>

                <div class="spell_column" id="spell_column_2">
                    <div class="spell_column_inner">
                        @for($i = 3; $i < 6; $i++)
                            <section>
                                <input name="toggles[spells][{{ $i }}]" type="hidden" value="0">
                                <input class="toggle" name="toggles[spells][{{ $i }}]" id="toggle_spell_level_{{ $i }}" type="checkbox" value="1" {{ $character->toggles['spells'][$i] ? 'checked' : '' }}>
                                <label class="toggle_label" for="toggle_spell_level_{{ $i }}">
                                    Level {{ $i }} Spells
                                </label>

                                <div class="expander" id="spell_expander_{{ $i }}">
                                    <div class="spell_slots">
                                        <div class="spell_slots_total">
                                            <label for="spell_level_{{ $i }}_slots_total">Spell Level {{ $i }} Slots Total</label>
                                            <input disabled name="spells[{{ $i }}][slots_total]" id="spell_level_{{ $i }}_slots_total" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['slots_total'] }}">
                                        </div>

                                        <div class="spell_slots_expended">
                                            <label for="spell_level_{{ $i }}_slots_expended">Spell Level {{ $i }} Slots Expended</label>
                                            <input disabled name="spells[{{ $i }}][slots_expended]" id="spell_level_{{ $i }}_slots_expended" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['slots_expended'] }}">
                                        </div>
                                    </div>

                                    <p>
                                        Spell List
                                    </p>

                                    <div class="spell_list" id="spell_list_{{ $i }}">
                                        @foreach($character->spells[$i]['list'] as $spell)
                                            <div class="spell" id="spell_level_{{ $i }}_spell_{{ $loop->index }}">
                                                <div class="spell_prepared">
                                                    <label for="spell_level_{{ $i }}_spell_{{ $loop->index }}_prepared">Spell Level {{ $i }} Spell {{ $loop->iteration }} Prepared?</label>
                                                    <input disabled name="spells[{{ $i }}][list][{{ $loop->index }}][prepared]" type="hidden" value="0"><input disabled name="spells[{{ $i }}][list][{{ $loop->index }}][prepared]" id="spell_level_{{ $i }}_spell_{{ $loop->index }}_prepared" type="checkbox" value="1" {{ $character->spells[$i]['list'][$loop->index]['prepared'] ? 'checked' : '' }}>
                                                </div>

                                                <div class="spell_name">
                                                    <label for="spell_level_{{ $i }}_spell_{{ $loop->index }}_spell">Spell Level {{ $i }} Spell {{ $loop->iteration }} Name</label>
                                                    <input disabled name="spells[{{ $i }}][list][{{ $loop->index }}][spell]" id="spell_level_{{ $i }}_spell_{{ $loop->index }}_spell" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['list'][$loop->index]['spell'] }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                        @endfor
                    </div>
                </div>

                <div class="spell_column" id="spell_column_3">
                    <div class="spell_column_inner">
                        @for($i = 6; $i < 10; $i++)
                            <section>
                                <input name="toggles[spells][{{ $i }}]" type="hidden" value="0">
                                <input class="toggle" name="toggles[spells][{{ $i }}]" id="toggle_spell_level_{{ $i }}" type="checkbox" value="1" {{ $character->toggles['spells'][$i] ? 'checked' : '' }}>
                                <label class="toggle_label" for="toggle_spell_level_{{ $i }}">
                                    Level {{ $i }} Spells
                                </label>

                                <div class="expander" id="spell_expander_{{ $i }}">
                                    <div class="spell_slots">
                                        <div class="spell_slots_total">
                                            <label for="spell_level_{{ $i }}_slots_total">Spell Level {{ $i }} Slots Total</label>
                                            <input disabled name="spells[{{ $i }}][slots_total]" id="spell_level_{{ $i }}_slots_total" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['slots_total'] }}">
                                        </div>

                                        <div class="spell_slots_expended">
                                            <label for="spell_level_{{ $i }}_slots_expended">Spell Level {{ $i }} Slots Expended</label>
                                            <input disabled name="spells[{{ $i }}][slots_expended]" id="spell_level_{{ $i }}_slots_expended" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['slots_expended'] }}">
                                        </div>
                                    </div>

                                    <p>
                                        Spell List
                                    </p>

                                    <div class="spell_list" id="spell_list_{{ $i }}">
                                        @foreach($character->spells[$i]['list'] as $spell)
                                            <div class="spell" id="spell_level_{{ $i }}_spell_{{ $loop->index }}">
                                                <div class="spell_prepared">
                                                    <label for="spell_level_{{ $i }}_spell_{{ $loop->index }}_prepared">Spell Level {{ $i }} Spell {{ $loop->iteration }} Prepared?</label>
                                                    <input disabled name="spells[{{ $i }}][list][{{ $loop->index }}][prepared]" type="hidden" value="0"><input disabled name="spells[{{ $i }}][list][{{ $loop->index }}][prepared]" id="spell_level_{{ $i }}_spell_{{ $loop->index }}_prepared" type="checkbox" value="1" {{ $character->spells[$i]['list'][$loop->index]['prepared'] ? 'checked' : '' }}>
                                                </div>

                                                <div class="spell_name">
                                                    <label for="spell_level_{{ $i }}_spell_{{ $loop->index }}_spell">Spell Level {{ $i }} Spell {{ $loop->iteration }} Name</label>
                                                    <input disabled name="spells[{{ $i }}][list][{{ $loop->index }}][spell]" id="spell_level_{{ $i }}_spell_{{ $loop->index }}_spell" type="text" autocorrect="off" autocapitalize="off" autocomplete="off" spellcheck="false" value="{{ $character->spells[$i]['list'][$loop->index]['spell'] }}">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
