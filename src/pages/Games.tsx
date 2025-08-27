import Header from '@/components/Header';
import Footer from '@/components/Footer';
import { Button } from '@/components/ui/button';
import { Card } from '@/components/ui/card';
import { Badge } from '@/components/ui/badge';
import { Gamepad2, Plane, Zap, Flag, Shield, Wrench, Dna } from 'lucide-react';
import gamesHero from '@/assets/games-hero.jpg';

const Games = () => {
  const gameModes = [
    {
      title: 'Exploration Mode',
      description: 'Control drones to explore the mangrove ecosystem, discovering creatures and plant systems while learning about Florida\'s biodiversity.',
      icon: Plane,
      difficulty: 'Beginner',
      players: '1-4 Players',
      category: 'Educational'
    },
    {
      title: 'Drone Racing Challenge',
      description: 'Competitive racing through the mangrove jungle with educational checkpoints and power-ups earned by answering ecosystem questions.',
      icon: Zap,
      difficulty: 'Intermediate',
      players: '2-8 Players', 
      category: 'Racing'
    },
    {
      title: 'Mangrove Flag Hunt',
      description: 'Capture the flag gameplay where teams compete to find hidden bases while solving environmental clues and outsmarting opponents.',
      icon: Flag,
      difficulty: 'Advanced',
      players: '4-16 Players',
      category: 'Strategy'
    },
    {
      title: 'Aerial Skirmish Battles',
      description: 'Drone dogfight mode with EMP and water cannon weapons while dodging mutated creatures in the dense mangrove creeks.',
      icon: Shield,
      difficulty: 'Advanced',
      players: '2-12 Players',
      category: 'Combat'
    },
    {
      title: 'Drone Engineering',
      description: 'Design custom drones with various components and test them in missions throughout the mangrove environment.',
      icon: Wrench,
      difficulty: 'Expert',
      players: '1-4 Players',
      category: 'Creative'
    },
    {
      title: 'Species Lab',
      description: 'Learn DNA engineering to design plants and animals adapted for the ecosystem using real-world genetic tools like CRISPR.',
      icon: Dna,
      difficulty: 'Expert',
      players: '1-6 Players',
      category: 'Scientific'
    }
  ];

  const getDifficultyColor = (difficulty: string) => {
    switch (difficulty) {
      case 'Beginner': return 'bg-seaweed text-primary-foreground';
      case 'Intermediate': return 'bg-accent text-accent-foreground';
      case 'Advanced': return 'bg-coral text-primary-foreground';
      case 'Expert': return 'bg-primary text-primary-foreground';
      default: return 'bg-muted text-muted-foreground';
    }
  };

  return (
    <div className="min-h-screen bg-background">
      <Header />
      <main className="pt-20">
        {/* Hero Section */}
        <section className="relative min-h-[60vh] flex items-center justify-center overflow-hidden">
          <div 
            className="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style={{ backgroundImage: `url(${gamesHero})` }}
          >
            <div className="absolute inset-0 bg-background/70 backdrop-blur-sm"></div>
          </div>
          
          <div className="relative z-10 container mx-auto px-4 text-center">
            <h1 className="text-5xl md:text-6xl font-bold mb-6 bg-gradient-hero bg-clip-text text-transparent">
              Waterways Games
            </h1>
            <p className="text-xl text-muted-foreground max-w-3xl mx-auto mb-8">
              An educational gaming ecosystem that follows the Waterways TV series mythology, 
              helping students acquire STEM knowledge and critical thinking skills through immersive gameplay.
            </p>
            <Button 
              size="lg"
              className="bg-gradient-ocean hover:shadow-[var(--shadow-glow)] text-lg px-8 py-4"
            >
              <Gamepad2 className="mr-2" size={20} />
              Play Now
            </Button>
          </div>
        </section>

        {/* Game Universe Overview */}
        <section className="py-20 bg-card">
          <div className="container mx-auto px-4">
            <div className="max-w-4xl mx-auto text-center">
              <h2 className="text-3xl font-bold mb-8 text-foreground">
                The Waterways Game Universe
              </h2>
              <p className="text-lg text-muted-foreground mb-12">
                Experience multiple game environments set in three distinct locations:
              </p>
              
              <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
                <Card className="p-6 border-border hover:border-accent transition-all duration-300">
                  <h3 className="text-xl font-semibold mb-3 text-foreground">Mangrove Ecosystem</h3>
                  <p className="text-muted-foreground">
                    Dense jungle and winding creeks of the 5-square-mile Waterways Ecosystem Trust (WET) 
                    adjoining Waterways Academy.
                  </p>
                </Card>
                
                <Card className="p-6 border-border hover:border-accent transition-all duration-300">
                  <h3 className="text-xl font-semibold mb-3 text-foreground">Christian's Lair</h3>
                  <p className="text-muted-foreground">
                    High-tech drone hub with operable garage doors for launching aerial vehicles through 
                    advanced technological settings.
                  </p>
                </Card>
                
                <Card className="p-6 border-border hover:border-accent transition-all duration-300">
                  <h3 className="text-xl font-semibold mb-3 text-foreground">Waterways Academy</h3>
                  <p className="text-muted-foreground">
                    State-of-the-art biology and technology laboratories where students conduct real-world 
                    scientific research and experiments.
                  </p>
                </Card>
              </div>
            </div>
          </div>
        </section>

        {/* Game Modes */}
        <section className="py-20">
          <div className="container mx-auto px-4">
            <h2 className="text-3xl font-bold text-center mb-12 text-foreground">
              Game Modes
            </h2>
            
            <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
              {gameModes.map((mode, index) => (
                <Card key={mode.title} className="p-6 bg-card border-border hover:border-accent transition-all duration-300 hover:shadow-[var(--shadow-card)] animate-slide-up group">
                  <div className="flex items-start justify-between mb-4">
                    <div className="w-12 h-12 bg-gradient-ocean rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform duration-300">
                      <mode.icon className="text-primary-foreground" size={24} />
                    </div>
                    <Badge className={getDifficultyColor(mode.difficulty)}>
                      {mode.difficulty}
                    </Badge>
                  </div>
                  
                  <h3 className="text-xl font-semibold mb-3 text-foreground group-hover:text-accent transition-colors duration-300">
                    {mode.title}
                  </h3>
                  
                  <p className="text-muted-foreground mb-4 leading-relaxed">
                    {mode.description}
                  </p>
                  
                  <div className="flex flex-wrap gap-2 mb-4">
                    <Badge variant="secondary">{mode.players}</Badge>
                    <Badge variant="outline">{mode.category}</Badge>
                  </div>
                  
                  <Button 
                    className="w-full bg-gradient-ocean hover:shadow-[var(--shadow-glow)] transition-all duration-300"
                    size="sm"
                  >
                    Learn More
                  </Button>
                </Card>
              ))}
            </div>
          </div>
        </section>

        {/* Educational Benefits */}
        <section className="py-20 bg-card">
          <div className="container mx-auto px-4">
            <div className="max-w-4xl mx-auto">
              <h2 className="text-3xl font-bold text-center mb-12 text-foreground">
                Educational Impact
              </h2>
              
              <div className="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div>
                  <h3 className="text-xl font-semibold mb-4 text-foreground">STEM Learning Objectives</h3>
                  <ul className="space-y-3 text-muted-foreground">
                    <li className="flex items-start">
                      <span className="w-2 h-2 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>
                      Ecosystem biology and environmental science
                    </li>
                    <li className="flex items-start">
                      <span className="w-2 h-2 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>
                      Engineering principles and drone technology
                    </li>
                    <li className="flex items-start">
                      <span className="w-2 h-2 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>
                      Genetics and DNA engineering with CRISPR
                    </li>
                    <li className="flex items-start">
                      <span className="w-2 h-2 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>
                      Critical thinking and problem-solving
                    </li>
                  </ul>
                </div>
                
                <div>
                  <h3 className="text-xl font-semibold mb-4 text-foreground">Skills Development</h3>
                  <ul className="space-y-3 text-muted-foreground">
                    <li className="flex items-start">
                      <span className="w-2 h-2 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>
                      Teamwork and communication
                    </li>
                    <li className="flex items-start">
                      <span className="w-2 h-2 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>
                      Strategic thinking and planning
                    </li>
                    <li className="flex items-start">
                      <span className="w-2 h-2 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>
                      Resource management and optimization
                    </li>
                    <li className="flex items-start">
                      <span className="w-2 h-2 bg-accent rounded-full mt-2 mr-3 flex-shrink-0"></span>
                      Creative design and innovation
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <Footer />
    </div>
  );
};

export default Games;