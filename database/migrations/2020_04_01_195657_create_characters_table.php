<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            # Accounting
            $table->id();
            $table->foreignId('user_id');
            $table->softDeletes();
            $table->timestamps();

            # General fields
            $table->string('character_name')->nullable()->default('?????');
            $table->string('class_and_level')->nullable()->default('?????');
            $table->string('background')->nullable()->default('?????');
            $table->string('race')->nullable()->default('?????');
            $table->string('alignment')->nullable()->default('?????');
            $table->string('experience_points')->nullable()->default(0);
            $table->string('inspiration')->nullable()->default(0);
            $table->string('proficiency_bonus')->nullable()->default(0);
            $table->string('passive_wisdom')->nullable()->default(0);
            $table->text('other_proficiencies_and_languages')->nullable();
            $table->string('armor_class')->nullable()->default(10);
            $table->string('initiative')->nullable()->default(0);
            $table->string('speed')->nullable()->default(10);
            $table->string('hit_point_maximum')->nullable()->default(1);
            $table->text('current_hit_points')->nullable()->default(1);
            $table->text('temporary_hit_points')->nullable();
            $table->string('total_hit_dice')->nullable()->default(0);
            $table->string('hit_dice')->nullable();
            $table->text('attacks_and_spellcasting')->nullable();
            $table->string('cp')->nullable()->default(0);
            $table->string('sp')->nullable()->default(0);
            $table->string('ep')->nullable()->default(0);
            $table->string('gp')->nullable()->default(0);
            $table->string('pp')->nullable()->default(0);
            $table->text('equipment')->nullable();
            $table->text('personality_traits')->nullable();
            $table->text('ideals')->nullable();
            $table->text('bonds')->nullable();
            $table->text('flaws')->nullable();
            $table->text('features_and_traits')->nullable();
            $table->string('age')->nullable()->default('?????');
            $table->string('height')->nullable()->default('?????');
            $table->string('weight')->nullable()->default('?????');
            $table->string('eyes')->nullable()->default('?????');
            $table->string('skin')->nullable()->default('?????');
            $table->string('hair')->nullable()->default('?????');
            $table->string('character_appearance')->nullable();
            $table->text('allies_and_organizations')->nullable();
            $table->string('faction_name')->nullable();
            $table->string('faction_symbol')->nullable();
            $table->text('character_backstory')->nullable();
            $table->text('additional_features_and_traits')->nullable();
            $table->text('treasure')->nullable();
            $table->string('spellcasting_class')->nullable()->default('n/a');
            $table->string('spellcasting_ability')->nullable()->default(0);
            $table->string('spell_save_dc')->nullable()->default(0);
            $table->string('spell_attack_bonus')->nullable()->default(0);

            # Abilities
            $table->json('strength')->nullable()->default('{"score":10,"bonus":0,"class_save":false,"saving_throw":0}');
            $table->json('dexterity')->nullable()->default('{"score":10,"bonus":0,"class_save":false,"saving_throw":0}');
            $table->json('constitution')->nullable()->default('{"score":10,"bonus":0,"class_save":false,"saving_throw":0}');
            $table->json('intelligence')->nullable()->default('{"score":10,"bonus":0,"class_save":false,"saving_throw":0}');
            $table->json('wisdom')->nullable()->default('{"score":10,"bonus":0,"class_save":false,"saving_throw":0}');
            $table->json('charisma')->nullable()->default('{"score":10,"bonus":0,"class_save":false,"saving_throw":0}');

            # Skills
            $table->json('acrobatics')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('animal_handling')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('arcana')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('athletics')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('deception')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('history')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('insight')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('intimidation')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('investigation')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('medicine')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('nature')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('perception')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('performance')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('persuasion')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('religion')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('sleight_of_hand')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('stealth')->nullable()->default('{"class_skill":false,"score":0}');
            $table->json('survival')->nullable()->default('{"class_skill":false,"score":0}');

            # Death Saves
            $table->json('death_saves')->nullable()->default('{"successes":[false,false,false],"failures":[false,false,false]}');

            # Weapons
            $table->json('weapons')->nullable()->default('[{"name":"","atk_bonus":0,"damage_and_type":""},{"name":"","atk_bonus":0,"damage_and_type":""},{"name":"","atk_bonus":0,"damage_and_type":""}]');

            # Spells
            $table->json('spells')->nullable()->default('[{"slots_total":0,"slots_expended":0,"list":[{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""}]},{"slots_total":0,"slots_expended":0,"list":[{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""}]},{"slots_total":0,"slots_expended":0,"list":[{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""}]},{"slots_total":0,"slots_expended":0,"list":[{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""}]},{"slots_total":0,"slots_expended":0,"list":[{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""}]},{"slots_total":0,"slots_expended":0,"list":[{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""}]},{"slots_total":0,"slots_expended":0,"list":[{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""}]},{"slots_total":0,"slots_expended":0,"list":[{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""}]},{"slots_total":0,"slots_expended":0,"list":[{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""}]},{"slots_total":0,"slots_expended":0,"list":[{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""},{"prepared":false,"spell":""}]}]');

            # Toggles
            $table->json('toggles')->nullable()->default('{"character_information":true,"ability_scores":false,"skills":false,"throws":false,"health_defense":false,"attacking":false,"gear":false,"story_background":false,"biological_information":false,"other_information":false,"spellcaster_information":false,"spells":[false,false,false,false,false,false,false,false,false,false]}');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
