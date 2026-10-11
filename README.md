# Gym Tracker – Evidencia tréningov

Meno a priezvisko: Ondrej Opálek

Študijná skupina: 5ZYI36

## Stručný opis projektu

Gym Tracker je webová aplikácia určená pre ľudí, ktorí navštevujú posilňovňu a chcú si zaznamenávať svoje tréningy a sledovať svoj progres. Hlavným cieľom aplikácie je umožniť používateľom jednoducho evidovať odcvičené cviky, použité váhy, počet sérií a opakovaní a uchovávať si históriu svojich tréningov na jednom mieste.

Používatelia si budú môcť vytvárať vlastné tréningové plány, pridávať cviky a zaznamenávať jednotlivé tréningy. Aplikácia im umožní prezerať si predchádzajúce výsledky a porovnávať svoj výkonnostný pokrok. Údaje budú uložené v databáze, pričom každý registrovaný používateľ bude mať prístup iba k svojim vlastným tréningom a plánom.

## Role v projekte

### 1. Návštevník
- Môže si prezerať úvodnú stránku aplikácie.
- Môže sa zaregistrovať alebo prihlásiť do svojho účtu.

### 2. Registrovaný používateľ
- Môže spravovať svoj používateľský účet.
- Môže vytvárať, upravovať a mazať vlastné tréningové plány.
- Môže vyberať cviky a zaznamenávať svoje tréningy.
- Môže si prezerať históriu tréningov a sledovať svoj pokrok.

### 3. Administrátor
- Môže spravovať zoznam dostupných cvikov.
- Môže pridávať, upravovať a odstraňovať cviky v databáze.
- Môže kontrolovať a spravovať používateľské účty.

## Prípady použitia podľa rolí

### Návštevník
- Zobrazí si úvodnú stránku a informácie o aplikácii.
- Vytvorí si nový používateľský účet.
- Prihlási sa do existujúceho účtu.

### Registrovaný používateľ
- Zobrazí si svoj osobný prehľad tréningov.
- Vytvorí nový tréningový plán.
- Pridá do plánu cviky.
- Upraví alebo odstráni tréningový plán.
- Zaznamená odcvičený tréning vrátane váh, sérií a opakovaní.
- Zobrazí si históriu svojich tréningov.
- Porovná svoje výsledky pri jednotlivých cvikoch.
- Upraví údaje svojho profilu.
- Odhlási sa z aplikácie.

### Administrátor
- Pridá nový cvik do databázy.
- Upraví údaje existujúceho cviku.
- Odstráni cvik z ponuky.
- Zobrazí zoznam používateľov.
- Spravuje používateľské účty.

## Plánované entity

### 1. Používateľ (User)
Predstavuje registrovaného používateľa aplikácie.

Atribúty:
- `id` – jedinečný identifikátor používateľa
- `name` – meno používateľa
- `email` – e-mailová adresa
- `password` – zahashované heslo
- `role` – rola používateľa
- `created_at` – dátum vytvorenia účtu

### 2. Tréningový plán (WorkoutPlan)
Predstavuje plán tréningov vytvorený používateľom.

Atribúty:
- `id` – jedinečný identifikátor plánu
- `user_id` – identifikátor vlastníka plánu
- `name` – názov tréningového plánu
- `description` – stručný opis plánu
- `created_at` – dátum vytvorenia plánu

### 3. Cvik (Exercise)
Predstavuje cvik dostupný v aplikácii.

Atribúty:
- `id` – jedinečný identifikátor cviku
- `name` – názov cviku
- `muscle_group` – precvičovaná svalová skupina
- `description` – opis cviku

### 4. Tréning (Workout)
Predstavuje konkrétny tréning vykonaný používateľom v určitý deň.

Atribúty:
- `id` – jedinečný identifikátor tréningu
- `user_id` – identifikátor používateľa
- `plan_id` – identifikátor použitého tréningového plánu, môže byť prázdny
- `date` – dátum tréningu
- `notes` – poznámky k tréningu

### 5. Záznam cviku v tréningu (WorkoutExercise)
Predstavuje vykonanie konkrétneho cviku počas tréningu.

Atribúty:
- `id` – jedinečný identifikátor záznamu
- `workout_id` – identifikátor tréningu
- `exercise_id` – identifikátor cviku
- `sets` – počet sérií
- `reps` – počet opakovaní v sérii
- `weight` – použitá hmotnosť v kilogramoch

Táto entita umožňuje zaznamenávať výkony pri jednotlivých cvikoch a porovnávať ich v priebehu času.

## Vzťahy medzi entitami

- **Používateľ – Tréningový plán (1:N):** Jeden používateľ môže vytvoriť viac tréningových plánov, pričom každý plán patrí jednému používateľovi.
- **Používateľ – Tréning (1:N):** Jeden používateľ môže mať zaznamenaných viac tréningov, pričom každý tréning patrí jednému používateľovi.
- **Tréningový plán – Tréning (1:N):** Jeden tréningový plán môže byť použitý pri viacerých tréningoch. Tréning môže byť zaznamenaný aj bez priradeného plánu.
- **Tréning – Záznam cviku v tréningu (1:N):** Jeden tréning obsahuje viac záznamov cvikov a každý záznam patrí jednému tréningu.
- **Cvik – Záznam cviku v tréningu (1:N):** Jeden cvik môže byť použitý v mnohých tréningoch a každý záznam odkazuje na jeden cvik.
- **Tréningový plán – Cvik (M:N):** Jeden tréningový plán môže obsahovať viac cvikov a jeden cvik môže byť súčasťou viacerých plánov. Tento vzťah bude v databáze realizovaný pomocnou tabuľkou, napríklad `PlanExercise`.

## Hlavné stránky aplikácie

1. **Úvodná stránka** – predstavuje aplikáciu a poskytuje odkazy na registráciu a prihlásenie.
2. **Registrácia** – umožňuje vytvoriť nový používateľský účet.
3. **Prihlásenie** – umožňuje prihlásenie do aplikácie pomocou e-mailu a hesla.
4. **Dashboard** – zobrazuje prehľad posledných tréningov, vytvorených plánov a základných štatistík používateľa.
5. **Tréningové plány** – zobrazuje zoznam plánov a umožňuje vytvárať, upravovať a mazať plány.
6. **Detail tréningového plánu** – zobrazuje cviky priradené k plánu a umožňuje ich spravovať.
7. **Záznam tréningu** – umožňuje vybrať cviky a zaznamenať počet sérií, opakovaní a použitú hmotnosť.
8. **História tréningov** – zobrazuje absolvované tréningy a ich podrobnosti.
9. **Štatistiky a pokrok** – umožňuje porovnávať výsledky a sledovať vývoj výkonu pri jednotlivých cvikoch.
10. **Administrácia cvikov** – umožňuje administrátorovi spravovať zoznam cvikov.

## Rozdelenie funkcionality

### Základné funkcie
- Registrácia, prihlásenie a odhlásenie používateľa.
- Ukladanie hesiel v zahashovanej podobe.
- Ukladanie údajov do databázy MySQL.
- Vytváranie, úprava a mazanie tréningových plánov.
- Správa cvikov a ich priraďovanie k tréningovým plánom.
- Zaznamenávanie tréningov vrátane dátumu, cvikov, sérií, opakovaní a hmotností.
- Zobrazovanie histórie tréningov.
- Zabezpečenie, aby používateľ mohol pristupovať iba k svojim vlastným plánom a tréningom.
- Základná administrácia zoznamu cvikov.

### Rozširujúce funkcie
- Grafické znázornenie vývoja výkonu pri jednotlivých cvikoch.
- Výpočet osobných rekordov používateľa.
- Výpočet celkového tréningového objemu.
- Vyhľadávanie a filtrovanie cvikov podľa názvu a svalovej skupiny.
- Možnosť pridávať poznámky k tréningom.
- Responzívny dizajn pre mobilné zariadenia.
- Možnosť nastavenia používateľského profilu vrátane telesnej hmotnosti a tréningových cieľov.

