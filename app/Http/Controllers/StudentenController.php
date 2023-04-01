<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studenten;
class StudentenController extends Controller
{
    // dit is om alle studenten op te halen en terug te zien
    public function index(){
        $data = Studenten::get();
        return view('read',compact('data'));
    }
    // om het formulier te zien voor het toevoegen van een nieuwe studenten
    public function toevoegen(){
        return view('create');
    }
    // dit is om de gegevens van de nieuwe studenten opteslaan in de database
    public function opslaan(Request $request){
        //hier word gechecked of alles is ingevulled
        $request->validate([
            'student_nummer' => 'Required',
            'Klas' => 'Required',
            'naam' => 'Required',
            'adres' => 'Required',
            'email' => 'Required',
            'telefoon' => 'Required',


        ]);

        // Haal de gegevens uit de database
        $student_nummer = $request->student_nummer;
        $Klas = $request->Klas;
        $naam = $request->naam;
        $adres = $request->adres;
        $email = $request->email;
        $telefoon = $request->telefoon;
        // hier word de data in de database gegooit
        $stu = new Studenten();
        // dit zorgt er voor dat alles op de juiste plek komt
        $stu->student_nummer = $student_nummer;
        $stu->Klas = $Klas;
        $stu->naam = $naam;
        $stu->adres = $adres;
        $stu->email = $email;
        $stu->telefoon = $telefoon;
        // hier word het opgeslagen en krijg je een bericht te zien als het succesvol was
        $stu->save();
        return redirect()->back()->with('success','Student is Successvol toegevoegd');
    }
    // hier krijg je een form te zien waar je aanpassingen ken toevoegen
    public function aanpassen($id){
        //hier word de data opgehaald uit de data base gebaseerd op de id
        $data = Studenten::where('id','=',$id)->first();
        return view('update', compact('data'));
    }
    // hier worden de aanpassingen door gepushed naar de data base
    public function update(Request $request){
        //hier checkt die weer of alles wel is ingevulled
        $request->validate([
            'student_nummer' => 'Required',
            'Klas' => 'Required',
            'naam' => 'Required',
            'adres' => 'Required',
            'email' => 'Required',
            'telefoon' => 'Required',
        ]);
        //hier worden de gegevens opgehaald voor de update
        $id =$request->id;
        $student_nummer = $request->student_nummer;
        $Klas = $request->Klas;
        $naam = $request->naam;
        $adres = $request->adres;
        $email = $request->email;
           $telefoon = $request->telefoon;
           //en hier worden de aangepaste gegevens weer de data base in gegooit
        Studenten::where('id','=',$id)->update([
            'student_nummer' =>$student_nummer,
            'Klas' => $Klas,
            'naam' => $naam,
            'adres' =>$adres,
            'email' =>$email,
            'telefoon' =>$telefoon,
        ]);
        //dit zie je als alles gelukt is
        return redirect()->back()->with('success','De Update is succesvol!');
    }
    //dit is de functie voor verwijderen en ook gelijk laat die weten of het succesvol was
    public function verwijderen($id){
        Studenten::where('id','=',$id)->delete();
        return redirect()->back()->with('success','De student is verwijdered');
    }
}