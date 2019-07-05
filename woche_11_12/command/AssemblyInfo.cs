using System.Reflection;
using System.Runtime.CompilerServices;

// Allgemeine Informationen �ber eine Assembly werden �ber die folgende
// Attributgruppe gesteuert. �ndern Sie diese Attributwerte, um die
// Assemblyinformationen zu �ndern.

// TODO: Werte der Assemblyattribute �berpr�fen

[assembly: AssemblyTitle("")]
[assembly: AssemblyDescription("")]
[assembly: AssemblyCompany("")]
[assembly: AssemblyProduct("")]
[assembly: AssemblyCopyright("")]
[assembly: AssemblyTrademark("")]
[assembly: AssemblyCulture("")]


// Versionsinformationen f�r eine Assembly bestehen aus den folgenden vier Werten:
//
//      Hauptversion
//      Nebenversion
//      Revision
//      Buildnummer
//
// Sie k�nnen alle Werte festlegen, oder f�r Revision und Buildnummer den Standard
//mit '*' verwenden. Siehe unten:

[assembly: AssemblyVersion("1.0.*")]

//
// Um die Assembly zu signieren, m�ssen Sie einen Schl�ssel angeben. Weitere Informationen 
// �ber die Assemblysignierung finden Sie in der Microsoft .NET Framework-Dokumentation.
//
// Verwenden Sie folgende Attribute, um festzulegen welcher Schl�ssel verwendet wird. 
//
// Hinweise: 
//   (*) Wenn kein Schl�ssel angegeben ist, wird die Assembly nicht signiert.
//   (*) "KeyName" verweist auf einen Schl�ssel, der im CSP (Crypto Service
//       Provider) auf Ihrem Computer installiert wurde. "KeyFile" verweist auf eine Datei, die einen
//       Schl�ssel enth�lt.
//   (*) Wenn die Werte f�r "KeyFile" und "KeyName" angegeben werden, 
//       werden folgende Vorg�nge ausgef�hrt:
//       (1) Wenn "KeyName" im CSP gefunden wird, wird dieser Schl�ssel verwendet.
//       (2) Wenn "KeyName" nicht vorhanden ist und "KeyFile" vorhanden ist, 
//           wird der Schl�ssel in "KeyFile" im CSP installiert und verwendet.
//   (*) Um eine "KeyFile" zu erstellen, k�nnen Sie das Programm "sn.exe" (Strong Name) verwenden.
//       Wenn "KeyFile" angegeben wird, muss der Pfad von "KeyFile"
//       relativ zum Projektausgabeverzeichnis sein:
//       %Project Directory%\obj\<Konfiguration>. Wenn sich "KeyFile" z.B.
//       im Projektverzeichnis befindet, geben Sie das AssemblyKeyFile-Attribut 
//       wie folgt an: [assembly: AssemblyKeyFile("..\..\mykey.snk")]
//   (*) Das Verz�gern der Signierung ist eine erweiterte Option. Weitere Informationen finden Sie in der
//       Microsoft .NET Framework-Dokumentation.
//

[assembly: AssemblyConfiguration("")]
[assembly: AssemblyDelaySign(false)]
[assembly: AssemblyKeyFile("")]
[assembly: AssemblyKeyName("")]


