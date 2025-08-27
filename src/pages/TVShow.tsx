import Header from '@/components/Header';
import Footer from '@/components/Footer';
import { Button } from '@/components/ui/button';
import { Card } from '@/components/ui/card';
import { Play, Users, Award, Calendar } from 'lucide-react';
import tvShowHero from '@/assets/tv-show-hero.jpg';

const TVShow = () => {
  return (
    <div className="min-h-screen bg-background">
      <Header />
      <main className="pt-20">
        {/* Hero Section */}
        <section className="relative min-h-[60vh] flex items-center justify-center overflow-hidden">
          <div 
            className="absolute inset-0 bg-cover bg-center bg-no-repeat"
            style={{ backgroundImage: `url(${tvShowHero})` }}
          >
            <div className="absolute inset-0 bg-background/70 backdrop-blur-sm"></div>
          </div>
          
          <div className="relative z-10 container mx-auto px-4 text-center">
            <h1 className="text-5xl md:text-6xl font-bold mb-6 bg-gradient-hero bg-clip-text text-transparent">
              The TV Show
            </h1>
            <p className="text-xl text-muted-foreground max-w-3xl mx-auto mb-8">
              A groundbreaking sci-fi series set at Waterways Academy, where mystery, suspense, 
              and cutting-edge STEM education converge in the heart of Florida's mangrove ecosystem.
            </p>
            <Button 
              size="lg"
              className="bg-gradient-ocean hover:shadow-[var(--shadow-glow)] text-lg px-8 py-4"
            >
              <Play className="mr-2" size={20} />
              Watch Trailer Now
            </Button>
          </div>
        </section>

        {/* About the Show */}
        <section className="py-20 bg-card">
          <div className="container mx-auto px-4">
            <div className="max-w-4xl mx-auto">
              <h2 className="text-3xl font-bold text-center mb-12 text-foreground">
                About Waterways
              </h2>
              
              <div className="prose prose-lg mx-auto text-muted-foreground">
                <p className="text-lg leading-relaxed mb-6">
                  "Waterways" is a scripted TV series set in a fictional K-12 school in Florida — Waterways Academy. 
                  It blends mystery, suspense, and science fiction environment to create a unique viewing experience 
                  that entertains while educating.
                </p>
                
                <p className="text-lg leading-relaxed mb-6">
                  The show stands out by offering a comprehensive companion curriculum developed by Academica educators, 
                  aimed at enhancing STEM learning. This curriculum will be accessible through classroom use and online 
                  on Academica's Colēgia platform, enriching each episode's educational value.
                </p>
                
                <p className="text-lg leading-relaxed mb-6">
                  Each episode of "Waterways" features guest cameos from renowned experts and celebrities, who appear 
                  in classroom scenes. These cameos extend beyond their brief appearances, as each guest also participates 
                  in a longer, more detailed interview designed for educational purposes.
                </p>
                
                <p className="text-lg leading-relaxed">
                  The series is set in a fictional Florida town called Waterways Village. It takes advantage of its 
                  sci-fi themes and Florida setting to explore various STEM topics, making science and technology 
                  an integral part of the narrative.
                </p>
              </div>
            </div>
          </div>
        </section>

        {/* Features Grid */}
        <section className="py-20">
          <div className="container mx-auto px-4">
            <h2 className="text-3xl font-bold text-center mb-12 text-foreground">
              What Makes Waterways Special
            </h2>
            
            <div className="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
              <Card className="p-8 bg-card border-border hover:border-accent transition-all duration-300 hover:shadow-[var(--shadow-card)]">
                <div className="text-center">
                  <div className="w-16 h-16 bg-gradient-ocean rounded-full flex items-center justify-center mx-auto mb-4">
                    <Users className="text-primary-foreground" size={32} />
                  </div>
                  <h3 className="text-xl font-semibold mb-3 text-foreground">Expert Cameos</h3>
                  <p className="text-muted-foreground">
                    Features renowned experts and celebrities in classroom scenes, with extended educational interviews.
                  </p>
                </div>
              </Card>
              
              <Card className="p-8 bg-card border-border hover:border-accent transition-all duration-300 hover:shadow-[var(--shadow-card)]">
                <div className="text-center">
                  <div className="w-16 h-16 bg-gradient-mangrove rounded-full flex items-center justify-center mx-auto mb-4">
                    <Award className="text-primary-foreground" size={32} />
                  </div>
                  <h3 className="text-xl font-semibold mb-3 text-foreground">Educational Curriculum</h3>
                  <p className="text-muted-foreground">
                    Comprehensive STEM curriculum developed by Academica educators, accessible through Colēgia platform.
                  </p>
                </div>
              </Card>
              
              <Card className="p-8 bg-card border-border hover:border-accent transition-all duration-300 hover:shadow-[var(--shadow-card)]">
                <div className="text-center">
                  <div className="w-16 h-16 bg-accent rounded-full flex items-center justify-center mx-auto mb-4">
                    <Calendar className="text-accent-foreground" size={32} />
                  </div>
                  <h3 className="text-xl font-semibold mb-3 text-foreground">Network Quality</h3>
                  <p className="text-muted-foreground">
                    First-of-its-kind network quality TV show seamlessly integrating entertainment with education.
                  </p>
                </div>
              </Card>
            </div>
          </div>
        </section>

        {/* Video Section */}
        <section className="py-20 bg-card">
          <div className="container mx-auto px-4">
            <div className="max-w-4xl mx-auto text-center">
              <h2 className="text-3xl font-bold mb-8 text-foreground">
                Watch the Official Trailer
              </h2>
              <div className="aspect-video bg-muted rounded-lg flex items-center justify-center mb-8">
                <div className="text-center">
                  <Play className="text-muted-foreground mb-4 mx-auto" size={64} />
                  <p className="text-muted-foreground">Trailer Video Player</p>
                  <p className="text-sm text-muted-foreground mt-2">
                    Experience the mystery and science of Waterways Academy
                  </p>
                </div>
              </div>
              <Button 
                size="lg"
                className="bg-gradient-ocean hover:shadow-[var(--shadow-glow)]"
              >
                Watch Full Episodes
              </Button>
            </div>
          </div>
        </section>
      </main>
      <Footer />
    </div>
  );
};

export default TVShow;